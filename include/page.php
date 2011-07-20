<?php
require_once 'dbconnector.php';
class Page{
	function Page(){
	}
	function getInstanceByID($id){
		if (!is_numeric($id)) return false;
		if (!@array_key_exists($id,self::$instances)) self::$instances[$id]=new Page($id,0,$fromRow,$pvq);
		return self::$instances[$id];
	}
	function getInstanceByName($name=''){
		$name=strtolower($name);
		$nameIndex=preg_replace('#[^a-z0-9/]#','-',$name);
		if(@array_key_exists($nameIndex,self::$instancesByName))return self::$instancesByName[$nameIndex];
		self::$instancesByName[$nameIndex]=new Page($name,1);
		return self::$instancesByName[$nameIndex];
	}
	function getInstanceBySpecial($sp=0){
		if (!is_numeric($sp)) return false;
		if (!@array_key_exists($sp,$instancesBySpecial)) $instancesBySpecial[$sp]=new Page($sp,3);
		return $instancesBySpecial[$sp];
	}
}
