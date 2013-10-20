<?php
class Privilege_handler
{
	private $namespace;
	private $allower;
	public function __construct()
	{
		$this->allower['setNamespace']	=	true;
	}
	private function namespaceIsSet()
	{
		return is_string($this->namespace) ? true : false;
	}
	public function setNamespance($namespace)
	{
		if($this->allower['setNamespace'] == true)
		{
			$this->namespace	=	$namespace;
			$this->allower['setNamespace'] == false;
			return true;
		}
		return false;
	}
}