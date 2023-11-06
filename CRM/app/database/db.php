<?php

require('connect.php');


//функция для респечатывания массива
function tt($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function selectAll($table){
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);   //подготовка
    $query->execute();              //обновление
    $errInfo = $query->errorInfo(); //возврат ошибок если есть

    if ($errInfo[0] !== PDO::ERR_NONE){
        echo $errInfo[2];
        exit();
    }

    return $query->fetchAll();;
}

tt(selectAll("users"));



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