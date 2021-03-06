<?php
    ob_start();
    session_start();
    require_once("../dts/configs.php");
    require_once("../inc/header.php");

    $readLevel = read($conect,'usuario',"WHERE level = 1"); //modificar conforme valor do formulário de cadastro

?>
<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="p-4 pt-5">
            <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../img/logo.jpg);"></a>
            <span>Valor Total: R$ 30.000,00</span><br/>
            <span>Valor Restante:</span>
            <div class="bg-light">
                <div class="text-center">
                    <h3>R$ 30.000,00</h3>
                </div>
            </div>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Qual o Ano?</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Ano 1</a></li>
                        <li><a href="#">Ano 2</a></li>
                        <li><a href="#">Ano 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Qual o mês?</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">Janeiro</a></li>
                        <li><a href="#">Fevereiro</a></li>
                        <li><a href="#">Março</a></li>
                    </ul>
                </li>
                <!--<li><a href="#">Portfolio</a></li>
                <li><a href="#">Contact</a></li>-->
            </ul>
        </div>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fa fa-bars"></i>
               </button>
                <?php
                    if($readLevel):
                        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                            echo '<ul class="nav navbar-nav ml-auto">';
                                echo '<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Info</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Inserir</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Cadastrar</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="../switch/logout.php">Sair</a></li>';
                            echo '</ul>';
                        echo '</div>';
                    else:
                        echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
                            echo '<ul class="nav navbar-nav ml-auto">';
                                echo '<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="#">Info</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="../switch/logout.php">Sair</a></li>';
                            echo '</ul>';
                        echo '</div>';
                    endif;
                ?>
            </div>
        </nav>

        <!--Tabela com dados-->
        <?php
            require_once("../pages/main.php");
        ?>
    </div>
</div>
<?php
    require_once("../inc/footer.php");
?>


