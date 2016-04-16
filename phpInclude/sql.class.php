<?php

class Kl_sql
{
    private $host;        //主机地址
    private $dbName;    // 数据库名称
    private $user;        // 数据库用户
    private $password;    // 数据库密码
    private $tableName;    // 使用表的名
    private $db;

    function __construct($host, $dbName, $user, $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->user = $user;
        $this->password = $password;
    }

    //设置表
    function setTableName($tableName)
    {
        $this->tableName = $tableName;
    }

    // 连接
    // 成功return ture 失败 return flase
    function connection()
    {
        $dns2 = <<<CKL
mysql:host={$this->host};dbname={$this->dbName}
CKL;
        try {
            $this->db = new PDO($dns2, 'root', '15181755');
            return true;
        } catch (PDOException $e) {
            echo "connection error " . $e->getMessage();
            return false;
        }
    }

    // 查询全部信息
    function queryAll()
    {
        $e = "SELECT * from $this->tableName";
        $reques = $this->db->query($e) or die("错误");
        return $reques;
    }

    // 倒序查询
    function queryAllF($key)
    {
        $e = "SELECT * from $this->tableName order by $key DESC ";
        $reques = $this->db->query($e) or die("错误");
        return $reques;
    }


    //查第from至limit个信息
    function queryLimit($from, $limit)
    {
        $limit -= $from;
        $e = "SELECT * from $this->tableName limit $from,$limit";
        $reques = $this->db->query($e) or die("error");
        return $reques;
    }


    //倒序 limit 查询
    function queryLimitF($key, $from, $limit)
    {
        $limit -= $from;
        $e = "SELECT * from $this->tableName order by $key desc limit $from,$limit";
        $reques = $this->db->query($e) or die("error");
        return $reques;
    }

    //获取content by key =  value
    function queryByKey($content, $key, $value)
    {
        $e = "SELECT $content from $this->tableName where $key=$value";
        $reques = $this->db->query($e) or die("error");
        return $reques;
    }

    /*
    * 多条件查询
    */
    function queryByKeys($content, $becArry)
    {
        $e = "SELECT $content from $this->tableName where ";
        foreach ($becArry as $key => $value) {
            $e .= <<<CKL
 $key="$value" and
CKL;
        }
        $e = substr($e, 0, -3);
        $reques = $this->db->query($e) or die("error");
        return $reques;
    }


    // 获取总数
    function getCount()
    {
        $e = "SELECT COUNT(*) from $this->tableName";
        $reques = $this->db->query($e) or die("error");
        return $reques->fetchColumn();
    }


    /*
     * delete item where key = value
     * return > 0 was right
     * return = 0 was error
     */
    function del($key, $value)
    {
        $e = "DELETE FROM $this->tableName WHERE $key = '$value' ";
        $request = $this->db->exec($e) or die("del error");
        if ($request == 0)
            return 0;
        else
            return $request;
    }

    /**
     * @param $varArry add item by array
     */
    function insert($varArry)
    {
        $e = "insert into $this->tableName(";
        foreach($varArry as $key=>$value){
            $e .= $key . ',';
        }
        $e = substr($e, 0, -1);
        $e .= ') values (';
        foreach($varArry as $key=>$value){
            $e .= "'" . $value . "',";
        }
        $e = substr($e, 0, -1);
        $e .= ')';
        return $this->db->exec($e) or die('error');
    }

    /*
    *update the date by where
    */
    function update($becArry, $desArry)
    {

        $e = "update $this->tableName set";

        foreach ($desArry as $key => $value) {
            $e .= <<<CKL
 $key="$value",
CKL;
        }

        $e = substr($e, 0, -1);
        if ($becArry != null) {
            $e .= " where ";
            foreach ($becArry as $key => $value) {
                $e .= <<<CKL
 $key="$value" and
CKL;
            }

            $e = substr($e, 0, -3);
        }
        echo $e;
        return $this->db->exec($e) or die("update error");
    }

    function getLastId(){
        return $this->db->lastInsertId();
    }

    function close()
    {
        $db = null;
    }
}

?>