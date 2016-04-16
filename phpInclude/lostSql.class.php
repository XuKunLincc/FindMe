<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/17
 * Time: 16:28
 */

require_once '../phpInclude/basc.class.php';
define("PAGE_INDEX",12);
class Ckl_lost extends Ckl_Base{

    function __construct(){
        parent::__construct(HOST,DB_NAME,DB_USER,DB_PASSWORD,'lost');
    }

    function __destruct(){
        $this->mysql->close();
    }

    function getNameById($id){
        return $this->getOneRow($this->mysql->queryByKey("lostId","_id",$id));
    }

    function getLocaById($id){
        return $this->getOneRow($this->mysql->queryByKey("local","_id",$id));
    }

    function getTimeById($id){
        return $this->getOneRow($this->mysql->queryByKey("htime","_id",$id));
    }

    function getVisitsById($id){
        return $this->getOneRow($this->mysql->queryByKey("visits","_id",$id));
    }

    function getPicIdById($id){
        return $this->getOneRow($this->mysql->queryByKey("picsId","_id",$id));
    }

    function getTypeById($id){
        return $this->getOneRow($this->mysql->queryByKey("type","_id",$id));
    }

    function getPDOStmById($id){
        $ar = $this->mysql->queryByKey("*","_id",$id);
        return $ar;
    }

    function getPhoneNumById($id){
        return $this->getOneRow($this->mysql->queryByKey("phoneNum","_id",$id));
    }

    function getUidById($id){
        return $this->getOneRow($this->mysql->queryByKey("uid","_id",$id));
    }

    function getStateById($id){
        return $this->getOneRow($this->mysql->queryByKey("state","_id",$id));
    }

    // 获取一页的信息
    function getPageByIndex($page){
        return $this->mysql->queryLimit(0, ($page)*PAGE_INDEX);
    }

    function getInfoById($id){
        return $this->getOneRow($this->mysql->queryByKey("info","_id",$id));
    }

    function getTitleById($id){
        return $this->getOneRow($this->mysql->queryByKey("title","_id",$id));
    }

    //牺牲程序模块化 提高性能
    function getByPDOStm($pdoStm,$key){
        $array = $pdoStm->fetch();
        return $array[$key];
    }

    //添加一条失物信息
    function addOneLostInfo($title, $info, $htime, $local, $unum, $state, $phoneNum, $picsId, $type, $uid, $time, $main){
        $args = get_defined_vars();
        func_get_args();
        foreach($args as $key=>$value){
            $array[$key] = $value;
        }
        $array['visits'] = 0;
        $this->mysql->insert($array);
        return $this->getLastId();
    }

    function getListNum(){
        return $this->mysql->getCount();
    }

}