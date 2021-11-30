<?php

    require_once("functions.php");

    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DBA','casa');

    //Base do Site
    define('BASE','http://localhost/casa/');

    //conecta ao banco de dados
    $conect = mysqli_connect(HOST,USER,PASS,DBA) or die ("Erro ao conectar: ".mysqli_error($conect));

    function read($conect,$tabela,$cond = null){
        $query = "SELECT * FROM {$tabela} {$cond}";
        $result = mysqli_query($conect,$query);
        $row = mysqli_num_rows($result);
        echo $row;
    }