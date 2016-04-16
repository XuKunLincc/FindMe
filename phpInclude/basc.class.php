<?php
require_once("sql.class.php");

define("DB_NAME", "findme");
define("DB_USER", "root");
define("DB_PASSWORD", "15181755");
define("HOST", "localhost");

class Ckl_Base
{

    protected $mysql;

    function __construct($host, $dbName, $dbUser, $dbPassword, $tbName)
    {
        if ($this->mysql = new Kl_sql($host, $dbName, $dbUser, $dbPassword)) {
            $this->mysql->connection();
            $this->mysql->setTableName($tbName);
        } else {
            echo "Mysql connection error";
        }
    }

    function getList()
    {
        return $this->mysql->queryAll();
    }

    function getContetByKey($contet, $key, $value)
    {
        return $this->mysql->queryByKey($contet, $key, $value);
    }

    function getContentByKeys($content)
    {
        $varArray = func_get_args();
        $varNum = func_num_args();
        $becArray = EvarsToBecs($varArray, $varNum);
        return $this->mysql->queryByKeys($content, $becArray);
    }

    function EvarsToBecs($varNum, $varArray)
    {
        for ($i = 1; $i < $varNum; $i += 2) {
            $becArray[$varArray[$i]] = $varArray[$i + 1];
        }
        return $becArray;
    }

    function getOneRow($pdoSm)
    {
        if ($pdoSm->rowCount())
            return $pdoSm->fetchColumn();
        else
            return "error";
    }

    function getLastId()
    {
        return $this->mysql->getLastId();
    }

}

?>