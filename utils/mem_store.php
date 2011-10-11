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
?>