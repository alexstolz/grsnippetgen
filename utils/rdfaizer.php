<?php
require_once("mem_store.php");

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
	private function get_ns_formatted() {
		$ns_formatted = "";
		foreach ($this->ns as $shortname=>$uri)
			$ns_formatted .= "\n".$this->spaces."xmlns:$shortname=\"$uri\"";
		return $ns_formatted;
	}
	private function rev() {
		foreach ($this->resource->get_revs() as $rev)
			$this->text .= $this->indent.$this->spaces.$this->spaces."<div rev=\"".$rev->get_predicate()."\" resource=\"".$rev->get_subject()."\"></div>\n";
	}
	private function rel() {
		foreach ($this->resource->get_rels() as $rel) {
			if(is_a($rel->get_object(), "Resource")) {
				$this->text .= $this->indent.$this->spaces.$this->spaces."<div rel=\"".$rel->get_predicate()."\">\n";
				$serializer = new Serializer();
				$serializer->set_indent($this->indent.$this->spaces.$this->spaces);
				$this->text .= $serializer->serialize($rel->get_object());
				$serializer->destroy();
				unset($serializer);
				$this->text .= $this->indent.$this->spaces.$this->spaces."</div>\n";
			}
			else
				$this->text .= $this->indent.$this->spaces.$this->spaces."<div rel=\"".$rel->get_predicate()."\" resource=\"".$rel->get_object()."\"></div>\n";
		}
	}
	private function property() {
		foreach ($this->resource->get_properties() as $property) {
			$type = $property->get_type();
			$lang = $property->get_lang();
			$this->text .= $this->indent.$this->spaces.$this->spaces."<div property=\"".$property->get_predicate()."\" content=\"".$property->get_object()."\"".($type?" datatype=\"".$type."\"":"").($lang?" xml:lang=\"".$lang."\"":"")."></div>\n";
		}
	}
	public function serialize($resource) {
		$this->resource = $resource;
		
		if(strlen($this->indent)<=strlen($this->spaces))
		$this->text .= $this->indent."<div xmlns=\"http://www.w3.org/1999/xhtml\"".$this->get_ns_formatted().">\n\n";
		$about = $this->resource->about();
		$typeof = $this->resource->typeof();
		$this->text .= $this->indent.$this->spaces."<div".($typeof?" typeof=\"".$typeof."\"":"").($about?" about=\"".$about."\"":"").">\n";
		$this->rev();
		$this->property();
		$this->rel();
		$this->text .= $this->indent.$this->spaces."</div>\n";
		if(strlen($this->indent)<=strlen($this->spaces))
		$this->text .= $this->indent."</div>\n";
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