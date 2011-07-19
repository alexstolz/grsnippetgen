<?php
class Rev {
	private $predicate, $subject;
	
	function __construct($predicate, $subject) {
		$this->predicate = $predicate;
		$this->subject = $subject;
	}
	public function get_predicate() {
		return $this->predicate;
	}
	public function get_subject() {
		return $this->subject;
	}
	public function destroy() {
		unset($this->predicate);
		unset($this->subject);
	}
}
class Rel {
	private $predicate, $object;
	
	function __construct($predicate, $object) {
		$this->predicate = $predicate;
		$this->object = $object;
	}
	public function get_predicate() {
		return $this->predicate;
	}
	public function get_object() {
		return $this->object;
	}
	public function destroy() {
		unset($this->predicate);
		unset($this->object);
	}
}
class Property {
	private $predicate, $object, $type, $lang;
	
	function __construct($predicate, $object, $type, $lang) {
		$this->predicate = $predicate;
		$this->object = $object;
		$this->type = $type;
		$this->lang = $lang;
	}
	public function get_predicate() {
		return $this->predicate;
	}
	public function get_object() {
		return $this->object;
	}
	public function get_type() {
		return $this->type;
	}
	public function get_lang() {
		return $this->lang;
	}
	public function destroy() {
		unset($this->predicate);
		unset($this->object);
		unset($this->type);
		unset($this->lang);
	}
}

class Resource {
	private $about, $typeof, $rev=array(), $rel=array(), $property=array();
	
	function __construct($about, $typeof) {
		$this->about = $about;
		$this->typeof = $typeof;
	}
	public function add_rev($predicate, $subject) {
		$this->rev[] = new Rev($predicate, $subject);
	}
	public function add_rel($predicate, $object) {
		$this->rel[] = new Rel($predicate, $object);
	}
	public function add_property($predicate, $object, $type=null, $lang=null) {
		$this->property[] = new Property($predicate, $object, $type, $lang);
	}
	public function about() {
		return $this->about;
	}
	public function typeof() {
		return $this->typeof;
	}
	public function get_revs() {
		return $this->rev;
	}
	public function get_rels() {
		return $this->rel;
	}
	public function get_properties() {
		return $this->property;
	}
	public function destroy() {
		unset($this->about);
		unset($this->typeof);
		unset($this->rev);
		unset($this->rel);
		unset($this->property);
	}
}

class Serializer {
	private $resource;
	private $indent;
	private $spaces;
	private $text;
	private $ns;
	
	function __construct($indent="", $indent_spaces = "  ") {
		$this->indent = $indent;
		$this->spaces = $indent_spaces;
		$this->text = "";
		$this->ns = array(
			"rdf"	=> "http://www.w3.org/1999/02/22-rdf-syntax-ns#",
			"rdfs"	=> "http://www.w3.org/2000/01/rdf-schema#",
			"xsd"	=> "http://www.w3.org/2001/XMLSchema#",
			"gr"	=> "http://purl.org/goodrelations/v1#",
			"foaf"	=> "http://xmlns.com/foaf/0.1/");
	}
	public function add_ns($shortname, $uri) {
		if(array_key_exists($shortname, $this->ns))
			echo "existing old value (".$this->ns[$shortname].") for $shortname has been overwritten by $uri";
		$this->ns[$shortname] = $uri;
	}
	public function del_ns($shortname) {
		if(array_key_exists($shortname, $this->ns))
			unset($this->ns[$shortname]);
	}
	private function full_uri($curie) {
	    list($prefix, $path) = split(":", $curie);
	    return $this->ns[$prefix].$path;
	}
	private function rev() {
		foreach ($this->resource->get_revs() as $rev)
			$this->text .= $this->indent.$this->spaces."<div rev=\"".$this->full_uri($rev->get_predicate())."\" resource=\"".$rev->get_subject()."\"></div>\n";
	}
	private function rel() {
		foreach ($this->resource->get_rels() as $rel) {
			if(is_a($rel->get_object(), "Resource")) {
				$this->text .= $this->indent.$this->spaces."<div itemprop=\"".$this->full_uri($rel->get_predicate())."\">\n";
				$serializer = new Serializer();
				$serializer->ns = $this->ns;
				$serializer->set_indent($this->indent.$this->spaces.$this->spaces);
				$this->text .= $serializer->serialize($rel->get_object());
				$serializer->destroy();
				unset($serializer);
				$this->text .= $this->indent.$this->spaces."</div>\n";
			}
			else
				$this->text .= $this->indent.$this->spaces."<link itemprop=\"".$this->full_uri($rel->get_predicate())."\" href=\"".$rel->get_object()."\">\n";
		}
	}
	private function property() {
		foreach ($this->resource->get_properties() as $property) {
			$type = $property->get_type();
			$lang = $property->get_lang();
			$this->text .= $this->indent.$this->spaces."<meta itemprop=\"".$this->full_uri($property->get_predicate())."\" content=\"".$property->get_object()."\">\n";
		}
	}
	public function serialize($resource) {
		$this->resource = $resource;

        // if(strlen($this->indent)<=strlen($this->spaces))
        // $this->text .= $this->indent."<div itemscope>\n";
		$about = $this->resource->about();
		$typeof = $this->resource->typeof();
		$this->text .= $this->indent."<div itemscope".($typeof?" itemtype=\"".$this->full_uri($typeof)."\"":"").($about?" itemid=\"".$about."\"":"").">\n";
		$this->rev();
		$this->property();
		$this->rel();
		$this->text .= $this->indent."</div>\n";
        // if(strlen($this->indent)<=strlen($this->spaces))
        // $this->text .= $this->indent."</div>\n";
		return $this->text;
	}
	public function set_indent($indent) {
		$this->indent = $indent;
	}
	public function set_indent_spaces($spaces) {
		$this->spaces = $spaces;
	}
	public function destroy() {
		$this->resource->destroy();
		unset($this->resource);
		unset($this->indent);
		unset($this->spaces);
		unset($this->text);
		unset($this->ns);
	}
}
?>