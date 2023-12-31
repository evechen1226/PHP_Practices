<?php

// $rows=all('students',['dept'=>'3']);


$up = update("students", '3', [`dept` => '16', 'name' => '張明珠']); //

dd($up);

function all($table = null, $where = '', $other = '')
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn, 'root', '');
    $sql = "select * from `$table` ";

    if (isset($table) && !empty($table)) {

        if (is_array($where)) {
            /**
             * ['dept'=>'2','graduate_at'=>12] =>  where `dept`='2' && `graduate_at`='12'
             * $sql="select * from `$table` where `dept`='2' && `graduate_at`='12'"
             */
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
        //echo $sql;
        $rows = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    } else {
        echo "錯誤:沒有指定的資料表名稱";
    }
}

function find($table, $id)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=scohool";
    $pdo = new PDO($dsn, 'rooot', '');
    $sql = "select * from `$table`";

    if (is_array($id)) {
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
    } else if (is_numeric($id)) {
        $sql .= " where `id` ='$id'";
    } else {
        echo "error：參數的資料型態必須是數字或陣列";
    }
    echo 'find =>' . $sql;
    $row = $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function update($table, $id, $cols)
{
    $dsn = "mysql:host=localhost;charset=utf8;dbname=school";
    $pdo = new PDO($dsn,'root', '');

    $sql = "update `$table` set ";

    if (!empty($cols)) {
        foreach ($cols as $col => $value) {
            $tmp[] = "`$col` = '$value'";
        }
    } else {
        echo "錯誤:缺少要編輯的欄位陣列";
    }

    $sql .= join(",", $tmp);

    $tmp = [];

    if (is_array($id)) {
        //將 id 的陣列 提取出來，
        foreach ($id as $col => $value) {
            $tmp[] = "`$col`='$value'";
        }
        $sql .=" where ".join(" && ",$tmp);

    } else if (is_numeric($id)) {
        $sql .= " where `id`='$id'";
    } else {
        echo "error：參數的資料型態必須是數字或陣列";
    }
    echo $sql;
    return $pdo->exec($sql);
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
