<?php
date_default_timezone_set("Asia/Taipei");
session_start();
class DB
{

    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    protected $pdo;
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, 'root', '');
    }

    function search($id = '', $other = '',)
    {
        $sql = "select * from `$this->table` ";
// <-----------------已經指定資料表--------------------->
        // if (isset($this->table) && !empty($this->table)) {

            if (is_array($id)) {

                foreach ($id as $col => $value) {

                    $tmp[] = "`$col`='$value'";
                }

                $sql .= " where " . join(" && ", $tmp);
            } else if (is_numeric($id)) {
                $sql .= " where `id`='$id'";

// <-----------------設定id 一定為數字--------------------->                  
                // } else {
                //     echo "錯誤:參數的資料型態比須是數字或陣列"; 
                          
            } else {
                $sql .= "$id";
            }

            $sql .= $other;
            //echo 'all=>'.$sql;

            $rows = $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
// <-----------------已經指定資料表--------------------->            
        // } else {
        //     echo "錯誤:沒有指定的資料表名稱";
        // }
    }

    function all($where = '', $other = '',)
    {
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

    //利用all() 去改
    function count($where = '', $other = '')
    {
        $sql = "select count(*) from `$this->table` ";

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
            $rows = $this->pdo->query($sql)->fetchColumn();
            return $rows;
        } else {
            echo "錯誤:沒有指定的資料表名稱";
        }
    }



    //假設id已確認為數字   
    function save($array)
    {
        //確認$array陣列裡有無id
        if (isset($array['id'])) {
            //有 id 為update
            $sql = "update `$this->table` set ";

            if (!empty($cols)) {
                foreach ($cols as $col => $value) {
                    $tmp[] = "`$col`='$value'";
                }
            } else {
                echo "錯誤:缺少要編輯的欄位陣列";
            }

            $sql .= join(",", $tmp);
            $sql .= " where `id`='{$array['id']}'";
        } else {
            //無 id 為insert
            $sql = "insert into `$this->table` ";
            $cols = "(`" . join("`,`", array_keys($array)) . "`)";
            $vals = "('" . join("','", $array) . "')";

            $sql = $sql . $cols . " values " . $vals;
        }

        return $this->pdo->exec($sql);
    }

    function del($id)
    {
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

    function q($sql)
    {
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


$student = new DB('students');
$rows = $student->count();
dd($rows);
