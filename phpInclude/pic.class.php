<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 14:47
 */

require_once("basc.class.php");


class Ckl_pic extends Ckl_Base
{
    function __construct(){
        parent::__construct(HOST,DB_NAME,DB_USER,DB_PASSWORD,'pictb');
    }

    function __destruct(){
        $this->mysql->close();
    }

    function getLostIdById($id){
        return $this->getOneRow($this->mysql->queryByKey("lostId","_id",$id));
    }

    function getPicListById($id){
        $list = $this->getOneRow($this->mysql->queryByKey("picname","_id",$id));
        return explode(";",$list);
    }

    function getPicListByLostId($lostId){
        $list = $this->getOneRow($this->mysql->queryByKey("picname","lostId",$lostId));
        return explode(";",$list);
    }

    function getPicArtListById($id){
        $list = $this->getOneRow($this->mysql->queryByKey("picart","_id",$id));
        return explode(";CKL;",$list);
    }

    function getPicArtListByLostId($lostId){
        $list = $this->getOneRow($this->mysql->queryByKey("picart","lostId",$lostId));
        return explode(";CKL;",$list);
    }

    function getPicNumById($id){
        return $this->getOneRow($this->mysql->queryByKey("picnum","_id",$id));
    }

    function setLostIdById($lostId, $picId){
        $becArray = array();
        $desArray = array();
        $becArray['lostId'] = $lostId;
        $desArray['_id'] = $picId;
        $this->mysql->update($desArray,$becArray);
    }

    function addOnePics($picnum, $picname, $picart){
        $args = get_defined_vars();
        func_get_args();
        foreach($args as $key=>$value){
            $array[$key] = $value;
        }
        $this->mysql->insert($array);
        return $this->getLastId();
    }
}