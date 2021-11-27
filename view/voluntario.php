<?php session_start(); ?>

<html>
    <head>
        <title>Seja voluntário!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giovana e Maria">
        <meta name="descrition" content="Projeto">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="https://kit.fontawesome.com/22dcc7af40.js" crossorigin="anonymous"></script>
        <link href="../css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="fundovoluntario">
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

        <div align="center" class="margem">
            <div class="container">
                <h3>Seja um voluntário!</h3>
                <p>Ser voluntário é acima de tudo um ato de amor, 
                    respeito, compaixão e solidariedade. Na prática, o serviço de 
                    voluntariado representa oferecer, espontaneamente, o seu melhor
                    para colaborar com a melhoria contínua do outro. Isto é altamente 
                    positivo, pois quando nós abrimos a esta possibilidade e, doamos
                    o nosso tempo, além de evoluir como ser humano, também ajudamos 
                    a construir um mundo melhor.</p>
                <p>Para ser voluntário basta doar seu tempo, trabalho e talento, de maneira
                    espontânea e não remunerada, para causas de interesse social e comunitário,
                    vindo a somar e não a substituir o funcionário, participar de reuniões e palestras
                    educativas na entidade, respeitar as normas de funcionamento e quadro de avisos da
                    entidade, ser sempre paciente e gentil com todos os idosos e funcionários da instituição,
                    sem demonstrar preferência especial. Se você acredita poder atuar segundo as normas acima
                    citadas, existe uma grande chance de ajudar esta entidade através da sua participação como
                    um “voluntário”.</p>
                <p>Caso queira doar algum alimento, roupas e entre outros, basta ir até a casa assistencial
                    mais perto de você e realizar a sua doação. Toda ajuda sempre será bem-vinda.</p>
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
