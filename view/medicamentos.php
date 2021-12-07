<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/MedicamentosDAO.php';
?>

<html>
    <head>
        <title>Cadatro Medicamentos</title>
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
                                <a class="nav-link" href="loginfuncionario.php"><i class="fas fa-user-md"></i> Funcionário</a>
                            </div>
                        </li>
                    </ul>
                    <a class="col-md-3" href="faleconosco.php"><i class="fas fa-question-circle"></i> Fale conosco</a>
                </div>
        </nav>

        <div id="site">
            
            <form method="POST" action="../controller/MedicamentosCTR.php">
                <h4 class="text-center">Cadastro de Medicamentos</h4>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputNome">Nome do medicamento:</label>
                        <input type="text" name="nome_med" class="form-control" id="nome_med" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCel">Dosagem:</label>
                        <input type="text" name="dose_med" class="form-control phone-ddd-mask" id="dose_med" required placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTel">Composição:</label>
                        <input type="text" name="composicao_med" class="form-control" id="composicao_med" required placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Periodicidade:</label>
                        <input type="text" name="periodico_med" class="form-control" id="periodico_med" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCEP">Data de início:</label>
                        <input type="date" name="data_inicio_med" class="form-control" id="data_inicio_med" placeholder="DD/MM/AAAA" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCEP">Data final:</label>
                        <input type="date" name="data_fim_med" class="form-control" id="datafim_med" placeholder="DD/MM/AAAA" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRua">Observação:</label>
                        <input type="text" name="obs_med" class="form-control" id="obs_med" required>
                    </div>

                    <div class="form-group">
                        <label for="inputTipo_Medicamentos">Insira a qual hóspede essas informações pertencem:</label>
                        <select id="id_hosp" class="form-control">
                            <?php
                            $resultado = consulta_medicamentos();
                            //   var_dump($resultado);
                            foreach ($resultado as $linha) {
                                ?>
                                <option value="<?= $linha['id_hosp'] ?>" class="form-control" id="nome_hosp" selected > <?= $linha['nome_hosp'] ?> </option>
                                <?php
                                $i++;
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="cadastrar_medicamentos" id="cadastrar_medicamentos"> Cadastrar </button>
                </div>
            </form>
        </div>


    </body>
</html>