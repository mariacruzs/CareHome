<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/FuncionarioDAO.php';
?>

<html>
    <head>
        <title>Cadastro Funcionário</title>
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
            <form method="POST" action="../controller/ResponsavelCTR.php">
                <h4 class="text-center">Cadastro do Funcionário</h4>
                <br>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome completo:</label>
                        <input type="text" name="nome_resp" class="form-control" id="nome_resp" required>
                    </div> 
                    <div class="form-group col-md-6">
                        <label for="inputData_nasc">Data de Nascimento:</label>
                        <input type="date" name="data_nasc_hosp" class="form-control" id="Data_nasc_hosp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRG">RG:</label>
                        <input type="text" name="rg_hosp" class="form-control" id="Rg_hosp" placeholder="00.000.000-0" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCPF">CPF:</label>
                        <input type="text" name="cpf_hosp" class="form-control mask-cpf" id="Cpf_hosp" placeholder="000.000.000-00" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputTel">Telefone:</label>
                        <input type="text" name="tel_resp" class="form-control" id="tel_resp" required placeholder="Ex.: (00) 0000-0000">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEstado">Estado:</label>
                        <select id="inputEstado" name="est_resp" class="form-control" required>
                            <option selected>UF</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade:</label>
                        <input type="text" name="cid_resp" class="form-control" id="cid_resp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCEP">CEP:</label>
                        <input type="text" name="cep_resp" class="form-control" id="cep_resp" placeholder="00000-000" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputBairro">Bairro:</label>
                        <input type="text" name="bairro_resp" class="form-control" id="bairro_resp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputRua">Rua:</label>
                        <input type="text" name="rua_resp" class="form-control" id="rua_resp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNum_Casa">Número da Casa:</label>
                        <input type="text" name="num_casa_resp" class="form-control" id="num_casa_resp" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNome">Senha:</label>
                        <input type="text" name="nome_resp" class="form-control" id="nome_resp" required>
                    </div> 
                    <button type="submit" class="btn btn-primary" name="cadastrar_funcionario" id="cadastrar_funcionario">Cadastrar</button>
                </div>
            </form>
        </div>

    </body>
</html>