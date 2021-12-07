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

    /*function read($conect,$tabela,$cond = null){
        $query = "SELECT * FROM {$tabela} {$cond}";
        $result = mysqli_query($conect,$query);
        $row = mysqli_num_rows($result);
        return $row;
    }*/

    function read($conect,$tabela, $cond = NULL){
        $qrRead = "SELECT * FROM {$tabela} {$cond}";
        $stRead = mysqli_query($conect,$qrRead) or die ('Erro ao ler em '.$tabela.' '.mysql_error());
        $cField = mysqli_num_fields($stRead);
        for($y = 0; $y < $cField; $y++){
            $names[$y] = mysqli_field_name($stRead,$y);
        }
        for($x = 0; $res = mysqli_fetch_assoc($stRead); $x++){
            for($i = 0; $i < $cField; $i++){
                $resultado[$x][$names[$i]] = $res[$names[$i]];
            }
        }
        return $resultado;
    }