<?php
    ob_start();
    session_start();
    require_once('../dts/configs.php');

    if(empty($_POST['user']) || empty($_POST['pass'])){
        header('Location: index.php');
        exit();
    }else{
        $usuario = mysqli_real_escape_string($conect,$_POST['user']);
        $senha = mysqli_real_escape_string($conect, $_POST['pass']);
        $pass = md5($senha);
        $verificar = read($conect,'usuario',"WHERE usuario = '$usuario' AND code = '$pass'");
        if($verificar){
            foreach($verificar as $userLogin);
            $_SESSION['sendLogin'] = $userLogin;
            header('Location: ../pages/home.php');
            exit();
        }else{
            header('Location: ../index.php');
            exit();
        }
    }










