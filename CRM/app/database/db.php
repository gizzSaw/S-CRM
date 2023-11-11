<?php

require('connect.php');


// для респечатывания массива
function tt($value){
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

//Запись в таблицу БД
function inssert($table, $params){
    global $pdo;
    //INSERT INTO `users` (admin username email password) VALUES ('0', 'vasgen', 'vasgenchik@mail.ru', '123456');
    $i = 0;
    $coll = '';
    $mask = '';
    foreach($params as $key => $value) {
        if($i === 0){
            $coll = $key;
            $mask = "'$value'";
        } else {
            $coll = $coll . ', ' . $key;
            $mask = $mask . ', ' . "'$value'";
        }
        $i++;
    }
    
    $sql = "INSERT INTO $table ($coll) VALUES ($mask);";
    

    tt($sql);                                //распечатка массива
    //exit();
    $query = $pdo->prepare($sql);          //подготовка
    $query->execute();                     //обновление
    dbCheckError($query);                  //возврат ошибок если есть
}


$arrData = [
    'admin' => '1',
    'username' => 'Evgeniy',
    'email' => 'Evgeniy@mail.ru',
    'password' => '123456',
    'created' => '2023-11-11 00:00:01'
];

inssert('users', $arrData);

// КОД ДЛЯ ТЕСТИРОВАНИЯ
$params = [
    'admin' => 1
];





