<?php
require_once("sql.class.php");
require_once("basc.class.php");


class Ckl_user extends Ckl_Base
{
	// private $mysql;

	function __construct()
	{
		parent::__construct(HOST,DB_NAME,DB_USER,DB_PASSWORD,'user');
	}

	function __destruct(){
		$this->mysql->close();
	}

	/*
	* 通过学号获取密码
	*/
	function getPasswordByNum($num){
		return parent::getOneRow($this->mysql->queryByKey("password","num",$num));
	}

	/**
	*根据用户ID获取密码
	*/
	function getPassswordById($id){
		return parent::getOneRow($this->mysql->queryByKey("password","_id",$id));
	}

	function login($num, $password){
		$becArray["num"]=$num;
		$becArray["password"]=$password;
		return parent::getOneRow($this->mysql->queryByKeys("_id",$becArray));
	}

	/**
	* 通过 $bec获取用户名
	*/
	function getName($bec,$var){
		return $this->mysql->queryByKey("name",$bec,$var);
	}

	function getNameByKeys(){
		$varArray = func_get_args();
		$varNum = func_num_args();
		$becArray = varsToBecs($varArray, $varNum);
		return $this->mysql->queryByKeys("name",$becArray);
	}

	function getNameBy($key, $value){
		return $this->mysql->queryByKey("name",$key, $value);
	}

	function getNameById($id){
		return $this->getOneRow($this->mysql->queryByKey("name","_id", $id));
	}

	//获取用户权限
	function getPower($bec, $var){
		return $this->mysql->queryByKey("power",$bec,$var);
	}

	function getPowerById($id){
		return parent::getOneRow($this->mysql->queryByKey("power","_id",$id));
	}

	//可能导致多结果
	function getPowerByName($name){
		return $this->mysql->queryByKey("power","name",$name);
	}

	function getPowerByNum($num){
		return parent::getOneRow($this->mysql->queryByKey("power","num",$num));
	}

	function getPowerBy($key, $value){
		return $this->mysql->queryByKey("power",$key,$value);
	}


	function getStatus($bec, $var){
		return $this->mysql->queryByKey("status",$bec,$var);
	}

	function getStatusById($id){
		return parent::getOneRow($this->mysql->queryByKey("status","id",$id));
	}

	//可能导致多结果
	function getStatusByName($name){
		return $this->mysql->queryByKey("status","name",$name);
	}

	function getStatusByNum($num){
		return parent::getOneRow($this->mysql->queryByKey("status","num",$num));
	}

	function getStatusBy($key, $value){
		return parent::getOneRow($this->mysql->queryByKey("status", $key,$value));
	}

	function getLastIpById($id){
		return parent::getOneRow($this->mysql->queryByKey("lastIp","_id",$id));
	}

	function getLastIpByNum($num){
		return parent::getOneRow($this->mysql->queryByKey("lastIp","num",$num));
	}

	function getLastIpBy($key, $value){
		return $this->mysql->queryByKey("lastIp", $key, $value);
	}

	function getLastTimeById($id){
		return parent::getOneRow($this->mysql->queryByKey("lastTime","_id",$id));
	}

	function getLastTimeByNum($num){
		return parent::getOneRow($this->mysql->queryByKey("lastTime","num",$num));
	}

	function getLastTimeBy($key, $value){
		return $this->mysql->queryByKey("lastTime", $key, $value);
	}

	function getNumById($id){

		return parent::getOneRow($this->mysql->queryByKey("num","_id",$id));
	}

	function getNumByName($name){
		return $this->mysql->queryByKey("num","name",$name);
	}

	function getNumBy($key, $value){
		return $this->mysql->queryByKey("num",$key,$value);
	}

	function getPermissionsByNum($num){
		return $this->getOneRow($this->mysql->queryByKey("permissions","num",$num));
	}
}
?>