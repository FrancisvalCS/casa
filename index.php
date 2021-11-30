<?php
    require_once("dts/configs.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Casa | Acompanhamento</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/login.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
    <div class="login">
        <!--<h1>INVENTÁRIO</h1>-->
        <form name="login" method="post" action="switch/login.php">
            <input type="text" name="user" placeholder="Usuário" required="required"/>
            <input type="password" name="pass" placeholder="Senha" required="required"/>
            <button type="submit" class="btn btn-primary btn-block btn-large" name="sendLogin">ENTRAR</button>
        </form>
    </div> 
</body>
</html>