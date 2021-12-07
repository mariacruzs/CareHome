<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/ResponsavelDAO.php';
?>

<html>
    <head>
        <title>Consulta e listagem - responsável</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Giovana e Maria">
        <meta name="descrition" content="Projeto">
        <link href="../css/estilo.css" rel="stylesheet" type="text/css" />
    </head>

    <body class=""> 
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

        <div id="site">
           

           
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Responsável</th>
                            <th>Nome Responsável</th> 
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <?php
                    $resultado = consulta_responsavel();
                    //   var_dump($resultado);
                    foreach ($resultado as $linha) {
                        ?>
                        <tr>
                            <td><?= $linha['id_resp'] ?></td>
                            <td><?= $linha['nome_resp'] ?></td>
                            <td>
                                <a href="responsavel.php?id_resp=<?= $linha['id_resp'] ?>" class="">Alterar</a>
                            </td>
                            <td>
                                <a href="../controller/ResponsavelCTR.php?id_resp=<?= $linha['id_resp'] ?>" class="">Excluir</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

        </div>
        <!--  <footer>
              <div class="row">
                  <div class="col-md-2"> </div>
                  <div class="col-md-2">
                      <h5 class="tfooter"></h5>
                      <ul class="rodape"> <!--list-unstyled (dentro da class)
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
                      <!--<a class="rodape " href="#">  <span class="icone"> <i class="fas fa-envelope"></i> </span> </a>
                  </div> 
              </div>
          </footer>-->

    </body>
</html>
