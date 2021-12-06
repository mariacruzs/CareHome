<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/PlanoSaudeDAO.php';
?>

<html>

<head>
    <title>Cadastro Plano de Saúde</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Giovana e Maria">
    <meta name="descrition" content="Projeto">
    <link href="../css/estilo.css" rel="stylesheet" type="text/css" />
</head>

<body class="imgfundo2">
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
                <a class="col-md-3" href="faleconosco.php"><i class="fas fa-question-circle"></i> Fale conosco</a>
            </div>
    </nav>

    <div id="site">
        <?php
        $id_ps = null;
        $des_ps = null;
        if (isset($_GET["id_plano"])) {
            $id_ps = filter_input(INPUT_GET, 'id_plano', FILTER_SANITIZE_NUMBER_INT);
            $resultado1 = consulta_plano("des_ps", " where id_ps = " . $id_ps);
            $des_ps = $resultado1[0]["des_ps"];
        }
        ?>
        <form method="POST" action="../controller/PlanoSaudeCTR.php">
            <h4 class="text-center">Cadastro do Plano de Saúde</h4>
            <br>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputDes_ps">Descrição do Plano de Saúde:</label>
                    <input type="text" name="des_ps" class="form-control" id="des_ps" required value="<?= $des_ps ?>">
                    <input type="hidden" name="id_ps" value="<?= $id_ps ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="cadastrar_plano" id="cadastrar_plano">Cadastrar</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Plano de Saúde</th>
                    <th>Descrição Plano de Saúde</th>
                </tr>
            </thead>
            <tbody>  
                <?php
                $resultado = consulta_plano();
                //   var_dump($resultado);
                foreach ($resultado as $linha) {
                ?>
                    <tr>
                        <td><?= $linha['id_ps'] ?></td>
                        <td><?= $linha['des_ps'] ?></td>
                        <td>
                           <!-- <input href="home.php?id_plano=<?= $linha['id_ps'] ?>" class="btn chamadaBtn" style="margin-left: 30px; color:white; margin-right: 30px; margin-top: 15px;" type="submit" value="Medicar" /> -->
                            <a href="home.php?id_plano=<?= $linha['id_ps'] ?>" class="">Medicar</a>
                        </td>
                        <td>
                             <!--<input href="planosaude.php?id_plano=<?= $linha['id_ps'] ?>" class="btn chamadaBtn" style="margin-left: 30px; color:white; margin-right: 30px; margin-top: 15px;" type="submit" value="Alterar" />-->
                           <a href="planosaude.php?id_plano=<?= $linha['id_ps'] ?>" class="">Alterar</a>
                        </td>
                        <td>
                                <!--<input href="../controller/PlanoSaudeCTR.php?id_plano=<?= $linha['id_ps'] ?>" class="btn chamadaBtn" style="margin-left: 30px; color:white; margin-right: 30px; margin-top: 15px;" type="submit" value="Excluir" />--> 
                        <a href="../controller/PlanoSaudeCTR.php?id_plano=<?= $linha['id_ps'] ?>" class="">Excluir</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>