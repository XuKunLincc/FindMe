<?php
/**
 * Created by IntelliJ IDEA.
 * User: Administrator
 * Date: 2016/3/20
 * Time: 14:17
 */

class Lost{
    private $title;
    private $info;
    private $time;
    private $state;
    private $phoneNum;
    private $local;
    private $picsId;
    private $type;
    private $uid;

    public static $LOST = 1;
    public static $COLLECT = 0;

    function __construct($title, $info, $time, $local, $state, $phoneNum, $picsId, $type, $uid){
        $this->title = $title;
        $this->info = $info;
        $this->time = $time;
        $this->state = $state;
        $this->phoneNum = $phoneNum;
        $this->picsId = $picsId;
        $this->local = $local;
        $this->uid = $uid;
        $this->type = $type;
    }
}