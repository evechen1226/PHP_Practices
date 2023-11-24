<?php

date_default_timezone_set("Asia/Taipei");
session_start();
class DB
{

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school"; //必需是固定值
    protected $pdo;  //new PDO($dsn, 'root', ''); 不能夠有變數的運算式, 但可以加空陣列 []
    protected $table;


    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    function all($where = '', $other = '')
    {
        // global $pdo; -----------------------已 在public function __construct($table) 宣告
        $sql = "select * from `$this->table` ";

        if (isset($this->table) && !empty($this->table)) {

            if (is_array($where)) {

                if (!empty($where)) {
                    foreach ($where as $col => $value) {
                        $tmp[] = "`$col`='$value'";
                    }
                    $sql .= " where " . join(" && ", $tmp);
                }
            } else {
                $sql .= " $where";
            }

            $sql .= $other;
            //echo 'all=>'.$sql;
            $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }


    function find($id)
    {
        ////  global $pdo;
        $sql = "select * from `$this->table` ";

        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo 'find=>'.$sql;
        $row = $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        return $row;
    }
    //利用save呼叫update' insent,就可以 update' insert 保護起來     
    function save($array)
    {
        if (isset($array['id'])) {
            $this->update($array['id'], $array);
        } else {
            $this->insert($array);
        }
    }

    protected function update($id, $cols)
    {
        //  global $pdo;

        $sql = "update `$this->table` set ";

        if (!empty($cols)) {
            foreach ($cols as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
        } else {
            echo "錯誤:缺少要編輯的欄位陣列";
        }

        $sql .= join(",", $tmp);
        $tmp = [];
        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= " where " . join(" && ", $tmp);
        } else if (is_numeric($id)) {

            $sql .= " where `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        // echo $sql;
        return $this->pdo->exec($sql);
    }

    protected function insert($values)
    {
        //  global $pdo;

        $sql = "insert into `$this->table` ";
        $cols = "(`" . join("`,`", array_keys($values)) . "`)";
        $vals = "('" . join("','", $values) . "')";

        $sql = $sql . $cols . " values " . $vals;

        //echo $sql;

        return $this->pdo->exec($sql);
    }

    function del($id)
    {
        //  global $pdo;
        $sql = "delete from `$this->table` where ";

        if (is_array($id)) {
            foreach ($id as $col => $value) {
                $tmp[] = "`$col`='$value'";
            }
            $sql .= join(" && ", $tmp);
        } else if (is_numeric($id)) {
            $sql .= " `id`='$id'";
        } else {
            echo "錯誤:參數的資料型態比須是數字或陣列";
        }
        //echo $sql;

        return $this->pdo->exec($sql);
    }
}
function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

$student = new DB('students');
$row = $student->all();
dd($row);
