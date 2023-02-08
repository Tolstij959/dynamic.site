<?php

require ('connect.php');

function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}
//Проверка выполнения запроса к БД
function dbCheckError ($query) {
    $errInfo = $query->errorInfo();
    if ($errInfo[0] !== PDO:: ERR_NONE) {
        echo $errInfo[2];
        exit();
    }
    return true;
}
//запрос на получение всех данных из выбранной таблицы
function selectAll($table, $params=[]){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($params)){
        $i=0;
        foreach ($params as $key=>$value){
            if (!is_numeric($value)) {
            $value = "'" . $value . "'";
            }
            if ($i===0){
                $sql= $sql . " WHERE $key = $value";
            } else {
                $sql= $sql . " AND $key = $value";
            }
            $i++;
        }

    }
    $query = $pdo-> prepare($sql);
    $query->execute();
    dbCheckError ($query);
    return $query->fetchAll();
}

//запрос на получение одной записи из  выбранной таблицы
function selectOne($table, $params=[]){
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($params)){
        $i=0;
        foreach ($params as $key=>$value){
            if (!is_numeric($value)) {
                $value = "'" . $value . "'";
            }
            if ($i===0){
                $sql= $sql . " WHERE $key = $value";
            } else {
                $sql= $sql . " AND $key = $value";
            }
            $i++;
        }
    }
//    $sql = $sql . " LIMIT 1";
    $query = $pdo-> prepare($sql);
    $query->execute();
    dbCheckError ($query);
    return $query->fetch();
}
$params=[
    'admin'=> 1,
    'username'=> 'Goga'
];

//tt(selectAll('users', $params));

//tt(selectOne('users'));




function insert ($table, $param){
    global $pdo;
    //INSERT INTO $table (admin, username, email,password) VALUES ( :adm, :user, :mail, :pass)"
    $i=0;
    $coll='';
    $mask='';


    foreach ($param as $key=>$value) {
        if ($i === 0) {
            $coll= $coll . "$key";
            $mask =  $mask . "$value";
        } else {
            $coll= $coll . ", $key";
            $mask =  $mask . ", $value";
        }
        $i++;
    }

    $sql = "INSERT INTO $table ($coll) VALUES ($mask)";

    tt($sql);
    exit();

    $query = $pdo-> prepare($sql);
    $query->execute($arrData);
    dbCheckError ($query);
}

$arrData=[
    'admin' => '0',
    'username' =>'22',
    'email'=>'22@yandex.ru',
    'password'=>'12345'
];
insert('users', $arrData);