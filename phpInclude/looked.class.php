<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/4/16
 * Time: 18:44
 */

require_once("basc.class.php");

class Ckl_looked extends Ckl_Base{
    function __construct(){
        parent::__construct(HOST,DB_NAME,DB_USER,DB_PASSWORD,'looked');
    }

    function __destruct(){
        $this->mysql->close();
    }

    function getTimeById($id){
        return $this->getOneRow($this->mysql->queryByKey("time","_id",$id));
    }

    function getNumById($id){
        return $this->getOneRow($this->mysql->queryByKey("num","_id",$id));
    }

    function getIdByTime($time){
        return $this->getOneRow($this->mysql->queryByKey("_id","time",$time));
    }

    function getLostIdById($id){
        return $this->getOneRow($this->mysql->queryByKey("lostId","_id",$id));
    }

    function getList(){
        return $this->mysql->queryAll();
    }

    function add($time,$lostId,$num){
        $varArry['time'] = $time;
        $varArry['lostId'] = $lostId;
        $varArry['num'] = $num;
        $this->mysql->insert($varArry);
    }
}