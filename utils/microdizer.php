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
	private function full_uri($curie) {
	    list($prefix, $path) = split(":", $curie);
	    return $this->ns[$prefix].$path;
	}
	private function prefix($curie) {
	    list($prefix, $path) = split(":", $curie);
	    return $prefix;
	}
	private function entity_name($curie) {
	    list($prefix, $path) = split(":", $curie);
	    return $path;
	}
	private function rev($scope_prefix) {
		foreach ($this->resource->get_revs() as $rev) {
		    if($this->prefix($rev->get_predicate()) == $scope_prefix)
			    $this->text .= $this->indent.$this->spaces."<div itemprop=\"".$this->entity_name($rev->get_predicate())."\" ITEMREVVVvvv=\"".$rev->get_subject()."\"></div>\n";
			else
			    $this->text .= $this->indent.$this->spaces."<div itemprop=\"".$this->full_uri($rev->get_predicate())."\" ITEMREVVVvvv=\"".$rev->get_subject()."\"></div>\n";
		}
	}
	private function rel($scope_prefix) {
		foreach ($this->resource->get_rels() as $rel) {
			if(is_a($rel->get_object(), "Resource")) {
			    if($this->prefix($rel->get_predicate()) == $scope_prefix)
				    $this->text .= $this->indent.$this->spaces."<div itemprop=\"".$this->entity_name($rel->get_predicate())."\">\n";
				else
				    $this->text .= $this->indent.$this->spaces."<div itemprop=\"".$this->full_uri($rel->get_predicate())."\">\n";
				$serializer = new Serializer();
				$serializer->ns = $this->ns;
				$serializer->set_indent($this->indent.$this->spaces.$this->spaces);
				$this->text .= $serializer->serialize($rel->get_object());
				$serializer->destroy();
				unset($serializer);
				$this->text .= $this->indent.$this->spaces."</div>\n";
			}
			else {
			    if($this->prefix($rel->get_predicate()) == $scope_prefix)
				    $this->text .= $this->indent.$this->spaces."<link itemprop=\"".$this->entity_name($rel->get_predicate())."\" href=\"".$rel->get_object()."\">\n";
				else
				    $this->text .= $this->indent.$this->spaces."<link itemprop=\"".$this->full_uri($rel->get_predicate())."\" href=\"".$rel->get_object()."\">\n";
			}
		}
	}
	private function property($scope_prefix) {
	    $time_datatypes = array("xsd:date", "xsd:dateTime", "xsd:time");
		foreach ($this->resource->get_properties() as $property) {
			$type = $property->get_type();
			$lang = $property->get_lang();
			if(in_array($type, $time_datatypes)) {
			    if($this->prefix($property->get_predicate()) == $scope_prefix)
			        $this->text .= $this->indent.$this->spaces."<time itemprop=\"".$this->entity_name($property->get_predicate())."\" datetime=\"".$property->get_object()."\">\n";
			    else
			        $this->text .= $this->indent.$this->spaces."<time itemprop=\"".$this->full_uri($property->get_predicate())."\" datetime=\"".$property->get_object()."\">\n";
			}
			else {
			    if($this->prefix($property->get_predicate()) == $scope_prefix)
			        $this->text .= $this->indent.$this->spaces."<meta itemprop=\"".$this->entity_name($property->get_predicate())."\" content=\"".$property->get_object()."\">\n";
			    else
			        $this->text .= $this->indent.$this->spaces."<meta itemprop=\"".$this->full_uri($property->get_predicate())."\" content=\"".$property->get_object()."\">\n";
			}
		}
	}
	public function serialize($resource) {
		$this->resource = $resource;

        // if(strlen($this->indent)<=strlen($this->spaces))
        // $this->text .= $this->indent."<div itemscope>\n";
		$about = $this->resource->about();
		$typeof = $this->resource->typeof();
		$this->text .= $this->indent."<div itemscope".($typeof?" itemtype=\"".$this->full_uri($typeof)."\"":"").($about?" itemid=\"".$about."\"":"").">\n";
		$this->rev($this->prefix($typeof));
		$this->property($this->prefix($typeof));
		$this->rel($this->prefix($typeof));
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