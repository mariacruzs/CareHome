<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/LoginFuncionarioDAO.php';
?>

<html>
    <head>
        <title>Login Funcionário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giovana e Maria">
        <meta name="descrition" content="Projeto">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="fundologin">
        <nav class="site-header">
            <div class="container">
                <div class="row">
                    <a class="col-md-2" href="home.php">
                        <img class="logo" src="../img/logo.png" alt="" />
                    </a>
                    <a class="col-md-2" href="home.php"> <i class="fas fa-home"></i> Home</a>
                    <a class="col-md-2" href="sobrenos.php"><i class="fas fa-users"></i> Sobre nós</a>
                    <ul>
                        <li class='nav-item dropdown'>
                            <a class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""><i class="fas fa-plus-circle"> </i> Cadastros</a>
                            <div class="dropdown-menu" style="background-color:#001133; padding-right: 45px;" aria-labelledby="dropdownMenuLink">
                                <a class="nav-link" href="planosaude.php"><i class="fas fa-user-nurse"></i> Plano de Saúde</a>
                                <a class="nav-link" href="cadastro.php"><i class="fas fa-user-alt"></i> Hóspede</a>
                                <a class="nav-link" href="responsavel.php"><i class="fas fa-user-shield"></i> Responsável</a>
                                <a class="nav-link" href="medicamentos.php"><i class="fas fa-capsules"></i> Medicamentos</a>
                                <a class="nav-link" href="loginfuncionario.php"><i class="fas fa-user-md"></i> Funcionário</a>
                            </div>
                        </li>
                    </ul>
                    <a class="col-md-3" href="faleconosco.php"><i class="fas fa-question-circle"></i> Fale conosco</a>
                </div>
        </nav>

        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center" id="template-bg-3">
            <div class="card mb-5 p-5 bg-gradient text-white col-md-4 formlogin">
                <div class="card-header text-center">
                    <h3>Login Funcionário</h3>
                </div>
                <div class="card-body mt-3">
                    <form name="login" action="" method="post">
                        <div class="input-group form-group mt-3">
                            <input type="text"
                                   class="form-control text-center p-3"
                                   placeholder="Número de Identificacação (CPF)" name="username">
                        </div>
                        <div class="input-group form-group mt-3">
                            <input type="password"
                                   class="form-control text-center p-3"
                                   placeholder="Senha" name="password">
                        </div>
                        <div class="text-center">
                            <input style="margin-left: -1px;" type="submit" value="Entrar"
                                   class="btn btn-primary mt-3 w-100 p-2"
                                   name="login-btn">
                        </div>
                    </form>
                    <?php if (!empty($loginResult)) { ?>
                        <div class="text-danger"><?php echo $loginResult; ?></div>

                    <?php } ?>  
                </div>
                <div class="card-footer p-3">
                    <div class="d-flex justify-content-center">
                        <div class="text-primary"> 
                            <a href="funcionario.php">Se você não é um funciário registrado no site, faça seu cadastro aqui.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-3">
                    <h5 class="tfooter"></h5>
                    <ul class="rodape"> <!--list-unstyled (dentro da class)-->
                        <h6 class="tfooter"> <b> MAPA DO SITE </b> </h6>
                        <li><a class="rodape " href="home.php">Tela inicial</a></li>
                        <li><a class="rodape " href="sobrenos.php">Sobre nós</a></li>
                        <li><a class="rodape " href="saude.php">Saúde e bem-estar</a></li>
                        <li><a class="rodape " href="voluntario.php">Seja um voluntário!</a></li>
                        <li><a class="rodape " href="cadastro.php">Cadastro do Hóspede</a></li>
                        <li><a class="rodape " href="loginfuncionario.php">Login do Funcionário</a></li>
                    </ul>
                </div>
                <div class="col-md-3" align="center">
                    <h5 class="tfooter"></h5>
                    <h6 id="fale" class="tfooter"> <b> NOS SIGA NAS REDES SOCIAIS: </b> </h6>
                    <a class="rodape " href="https://www.instagram.com/larsaovicentedepaulocosmorama/"> <span class="icone"> <i class="fab fa-instagram"></i> </span> </a>
                    <a class="rodape " href="https://www.facebook.com/SSVPcosmorama/"> <span class="icone"> <i class="fab fa-facebook"></i> </span> </a>
                    <!--<a class="rodape " href="#">  <span class="icone"> <i class="fas fa-envelope"></i> </span> </a>-->
                </div> 
            </div>
        </footer>
        
    </body>
</html>