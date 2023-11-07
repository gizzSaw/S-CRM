<?php

require('connect.php');


// для респечатывания массива
function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
// проверки запроса к БД
function dbCheckError($query){
    $errInfo = $query->errorInfo();         //возврат ошибок если есть
    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }
    return true;
}
//запрос на получение данных
function selectAll($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)){ //если параметры есть 
        $i = 0;
        foreach ($params as $key => $value){ 
            if (!is_numeric($value)) {          //если параметр не число
                $value = "'".$value."'";        //добавить кавычки
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value "; //первый подставляем через WHERE
            }  else {
                $sql = $sql . " AND $key = $value";    //остальные подставляем через AND
            }
            $i++;
        }
        
    }
    
    $query = $pdo->prepare($sql);          //подготовка
    $query->execute();                     //обновление
    dbCheckError($query);                  //возврат ошибок если есть
    return $query->fetchAll();;
}

//запрос на получение одной строки из выбраной таблицы
function selectOne($table, $params = []){
    global $pdo;
    $sql = "SELECT * FROM $table";

    if (!empty($params)){ //если параметры есть 
        $i = 0;
        foreach ($params as $key => $value){ 
            if (!is_numeric($value)) {          //если параметр не число
                $value = "'".$value."'";        //добавить кавычки
            }
            if ($i === 0) {
                $sql = $sql . " WHERE $key = $value "; //первый подставляем через WHERE
            }  else {
                $sql = $sql . " AND $key = $value";    //остальные подставляем через AND
            }
            $i++;
        }
    }

    $sql = $sql . "LIMIT 1";               //можно убрать, так как в конце fetch
    $query = $pdo->prepare($sql);          //подготовка
    $query->execute();                     //обновление
    dbCheckError($query);                  //возврат ошибок если есть
    return $query->fetch();;
}


// КОД ДЛЯ ТЕСТИРОВАНИЯ
$params = [
    'admin' => 1
];


tt(selectOne("users", $params));
tt(selectAll("users", $params));



// require 'connect.php';

// $sql = "SELECT * FROM users";

// $query = $pdo->prepare($sql);
// $query->execute();
// $errInfo = $query->errorInfo();

// if ($errInfo[0] !== PDO::ERR_NONE) {
//     echo $errInfo[2];
//     exit();
// }

// $data = $query->fetch(PDO::FETCH_ASSOC);

// print_r($data);