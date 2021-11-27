<?php session_start(); ?>

<html>
    <head>
        <title>Saúde e bem-estar</title>
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

    <body class="img_saude">
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
                <h3>Saúde e bem-estar</h3>
                <p>O Brasil possui mais de 28 milhões de pessoas na faixa etária de 60 anos, 
                    representando 13% da população, e essa taxa vem crescendo cada dia mais. 
                    O Care Home prioriza os cuidados com a terceira idade, por isso oferecemos 
                    profissionais especializados para auxiliar no que for preciso, tornando a
                    vida do hóspede mais saudável e, consequentemente, mais longa. 
                <P>Nossa instituição pensou em todos os detalhes para que cada morador se sinta acolhido
                    e desfrute ao máximo da sua moradia e do carinho que dedicamos a ele. Isso se materializa
                    nos diferentes tipos de serviços que oferecemos, e que estão relacionados ao cuidado integral
                    com a saúde, à hospitalidade e à segurança dos nossos moradores.</p>
                <div>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="chamadaIMG2" src="../img/assistencia24h.png" alt=""/>
                            <div class="caption ">
                                <p class="chamada2" style=" font-family: verdana; font-size: 14px">Suporte de enfermagem 24hrs</p>
                            </div>
                        </div>
                        <div class="col-md-4">

                            <img class="chamadaIMG2" src="../img/equipe.png" alt=""/>
                            <div class="caption">
                                <p class="chamada2" style=" font-family: verdana; font-size: 14px">Equipe multidisciplinar</p>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <img class="chamadaIMG2"  src="../img/gestaodemedicamentos.png" alt=""/>
                            <div >
                                <p class="chamada2" style=" font-family: verdana; font-size: 14px">
                                    Gestão de medicamentos</p>
                            </div>
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
