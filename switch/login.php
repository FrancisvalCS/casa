<?php
    ob_start();
    session_start();
    require_once('../dts/configs.php');

    if(empty($_POST['user']) || empty($_POST['pass'])){
        header('Location: index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conect,$_POST['user']);
    $senha = mysqli_real_escape_string($conect, $_POST['pass']);

    $verificar = read($conect,'usuario',"WHERE usuario = '$usuario' AND senha = '$senha'");
    if($verificar = 1){
        $_SESSION['sendLogin'] = $verificar;
        header('Location: ../pages/home.php');
        exit();
    }else{
        header('Location: ../index.php');
        exit();
    }



   /* $query = "select * from usuario where username = '$usuario' and senha = md5('$senha')";
    $result = mysqli_query($conect,$query);
    $row = mysqli_num_rows($result);
    echo "Numero de linhas: ".$row;*/

