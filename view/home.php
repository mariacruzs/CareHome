<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/HospedeDAO.php';
?>

<html>
    <head>
        <title>Care Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giovana e Maria">
        <meta name="descrition" content="Projeto">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css" />
    </head>

    <body class="fundohome"> 
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
                            </div>
                        </li>
                    </ul>

                    <ul>
                        <li class='nav-item dropdown'>
                            <a class="nav-link dropdown-toggle" id="dropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=""><i class="fas fa-plus-circle"> </i> Consultas e Listagens</a>
                            <div class="dropdown-menu" style="background-color:#001133; padding-right: 45px;" aria-labelledby="dropdownMenuLink">
                                <a class="nav-link" href="listagem_hospede.php"><i class="fas fa-user-alt"></i> Hóspede</a>
                                <a class="nav-link" href="listagem_responsavel.php"><i class="fas fa-user-shield"></i> Responsável</a>
                                <a class="nav-link" href="listagem_medicamentos.php"><i class="fas fa-capsules"></i> Medicamentos</a>
                                <a class="nav-link" href="listagem_funcionario.php"><i class="fas fa-user-md"></i> Funcionário</a>
                            </div>
                        </li>
                    </ul>
                    <a class="col-md-3" href="faleconosco.php"><i class="fas fa-question-circle"></i> Fale conosco</a>
                    <a class="col-md-3" href="loginfuncionario.php"><i class="fas fa-user"></i> Entrar</a>
                </div>
        </nav>

        <div class="margem2" align="center">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../img/sentada.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">                          
                                <h5>Área de Lazer </h5>
                                <p>Nossa Intituição têm um espaço dedicado ao lazer dos idosos, com uma área arejada e repleta de elementos da natureza.</p>
                                <!--<a href="/integralidade-ampliada-novas-praticas-novos-saberes">Integralidade ampliada: novas práticas, novos saberes </a> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/velhosquebracabeca.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Área de jogos</h5>
                                <p>Nossa Instituição têm um espaço dedicado aos jogos para o entretenimento dos idosos, onde priorizamos os jogos que estimulam a memória para um melhor aproveitamento dos indivíduos.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../img/..." class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Enfermagem</h5>
                                <p>Temos uma área dedicada ao atendimento dos idosos, onde enfermeiros estão disponíveis 24h por dia. Além disso, nossos funcionários não desgrudam o olho dos hóspedes. Estamos sempre atentos! :)</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div align="center" class="margem">
            <div class="container">
                <div class="row">
                    <!--sobre nós-->
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img class="chamadaIMG" src="../img/sobrenos.png" alt="" />
                            <div class="caption ">
                                <p class="chamada" style=" font-family: verdana; font-size: 15px">Cuidar bem de idosos é uma
                                    tarefa que requer muito cuidado e dedicação, portanto contamos com uma equipe com experiência
                                    e motivação para prestar um atendimento com qualidade superior. </p>
                            </div>
                            <!-- <button style="margin-left: 5px;" class="btn btn-primary" id="prev">Saiba mais</button>-->
                            <form action=sobrenos.php>
                                <input class="btn  chamadaBtn" style="margin-left: 30px; margin-right: 50px; color:white; margin-top: 35px;" type="submit" value="Saiba Mais"/>
                            </form>
                        </div>
                    </div>
                    <!--saúde e bem-estar-->
                    <div class="col-md-4">
                        <img src="../img/vertical.jpeg" class="vertical" alt="" />
                        <div class="thumbnail">
                            <img class="chamadaIMG" src="../img/saudeebemestar.png" alt="" />
                            <div class="caption">
                                <p class="chamada" style=" font-family: verdana; font-size: 15px">As ações para promoção do bem-estar do idoso ainda são tímidas no país,
                                    embora a expectativa de vida da população aumente a cada ano.
                                    Confira, no nosso texto, os fatores que garantem o bem-estar do idoso.</p>
                            </div>                  
                            <form action=saude.php>
                                <input class="btn chamadaBtn" style="margin-left: 30px; color:white; margin-right: 30px; margin-top: 15px;" type="submit" value="Saiba Mais" />
                            </form>
                        </div>
                    </div>
                    <!---voluntário-->
                    <div class="col-md-4">
                        <img src="../img/vertical.jpeg" class="vertical" alt="" />
                        <div class="thumbnail">
                            <img class="chamadaIMG3" src="../img/sejavoluntario.png" alt=""/>
                            <div>
                                <p class="chamada" style=" font-family: verdana; font-size: 15px">
                                    Ser voluntário é acima de tudo um ato de amor,
                                    respeito, compaixão e solidariedade. Na prática, o serviço de
                                    voluntariado representa oferecer, espontaneamente, o seu melhor
                                    para colaborar com a melhoria contínua do outro.</p>
                            </div>
                            <form action=voluntario.php>
                                <input class="btn chamadaBtn" style="margin-left: 30px; color:white; margin-right: 30px; margin-top: 15px;" type="submit" value="Saiba Mais" />
                            </form>              
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <form action="faleconosco.php" method="POST">
             <fieldset>
                 <div class="margem">
                     <legend class="text-center">Envie sua dúvida ou sujestão.</legend>
                     <div class="form-row">
                         <div class="form-group col-md-6">
                             <div class="mb-3">
                                 <label for="Nome">Nome:</label>
                                 <input type="text" class="form-control" name="nome" placeholder="Digite seu nome aqui.">
                             </div>
                         </div>
                         <div class="form-group col-md-6">
                             <label for="E-mail">E-mail:</label>
                             <input type="email" class="form-control" id="inputNome" name="email" placeholder="nome@exemplo.com" required>
                         </div>
                         <label for="Comentario">Comentário:</label>
                         <textarea class="form-control" name="comentario" id="comentario" placeholder="Deixe aqui sua dúvida ou sujestão!" rows="3"></textarea>
                         <input type="submit" style="margin-top: 20px;" name="enviar" value="Enviar" class="btn btn-primary" role="button">
                     </div>
                 </div>
             </fieldset>
         </form> -->

        <footer>
            <div class="row">
                <div class="col-md-2"> </div>
                <div class="col-md-2">
                    <h5 class="tfooter"></h5>
                    <ul class="rodape"> <!--list-unstyled (dentro da class)-->
                        <h6 class="tfooter"> <b> MAPA DO SITE </b> </h6>
                        <li><a class="rodape" href="home.php">Tela inicial</a></li>
                        <li><a class="rodape" href="sobrenos.php">Sobre nós</a></li>
                        <li><a class="rodape" href="saude.php">Saúde e bem-estar</a></li>
                        <li><a class="rodape" href="voluntario.php">Seja um voluntário!</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="tfooter"></h5>
                    <ul class="rodape">
                        <h6 class="tfooter2"> <b> MAPA DO SITE </b> </h6>
                        <li><a class="rodape" href="cadastro.php">Cadastro do Hóspede</a></li>
                        <li><a class="rodape" href="loginfuncionario.php">Login do Funcionário</a></li>
                        <li><a class="rodape" href="faleconosco.php">Fale conosco</a></li>
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