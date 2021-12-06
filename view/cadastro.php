<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/HospedeDAO.php';
include_once '../dao/PlanoSaudeDAO.php';
?>

<html>
    <head>
        <title>Cadastro Hóspede</title>
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
            <div class="container">
                <div class="row">
                    <h4 class="text-center">Cadastro do Hóspede - Etapa <span id="passo"></span></h4>
                    <form class="" method="POST" action="../controller/HospedeCTR.php">
                        <!-- Inicio da etapa 1 -->
                        <div id="step_1" class="step">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNome">Nome completo:</label>
                                    <input type="text" name="nome_hosp" class="form-control" id="Nome_hosp" required>
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
                                    <label for="inputEstado" name="est_hosp">Estado:</label>
                                    <select id="Est_hosp" name="est_hosp" class="form-control" required>
                                        <option selected>Escolha</option>
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
                                    <input type="text" name="cid_hosp" class="form-control" id="Cid_hosp" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCEP">CEP:</label>
                                    <input type="text" name="cep_hosp" class="form-control" id="Cep_hosp" placeholder="00000-000" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputBairro">Bairro:</label>
                                    <input type="text" name="bairro_hosp" class="form-control" id="Bairro_hosp" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputRua">Rua:</label>
                                    <input type="text" name="rua_hosp" class="form-control" id="Rua_hosp" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNum_Casa">Número da Casa:</label>
                                    <input type="text" name="num_casa_hosp" class="form-control" id="Num_casa_hosp" required>
                                </div>
                            </div>
                        </div>
                        <!-- Inicio da etapa 2 -->
                        <div id="step_2" class="step">
                            <div class="form-group">
                                <label for="inputDoenca">É portador de enfermidade(es)ou necessidades especiais?</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="d_hosp" type="radio" value="Sim" id="d_hosp1">
                                    <label class="form-check-label" for="d_hosp1">Sim</label>
                                    <input class="form-check-input" style="margin-left: 10px;" name="d_hosp" type="radio" value="Não" id="d_hosp2">
                                    <label class="form-check-label" style="margin-left: 30px;" for="d_hosp2">Não</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTipo_d">Caso seja, qual(ais)?</label>
                                <input type="text" name="tipo_d" class="form-control" id="Tipo_D">
                            </div>
                            <div class="form-group">
                                <label for="inputMed">Necessita de medicamento(s) específico(s)?</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="med_hosp" type="radio" value="Sim" id="med_hosp1">
                                    <label class="form-check-label" for="med_hosp1">Sim</label>
                                    <input class="form-check-input" style="margin-left: 10px;" name="med_hosp" type="radio" value="Não" id="med_hosp2">
                                    <label class="form-check-label" style="margin-left: 30px;" for="med_hosp2">Não</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTipo_med">Se sim, qual(ais)?</label>
                                <input type="text" name="tipo_med" class="form-control" id="Tipo_med">
                            </div>
                            <div class="form-group">
                                <label for="inputEsp">Necessita de profissional(is) especializado(s)?</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="esp_hosp" type="radio" value="Sim" id="esp_hosp1">
                                    <label class="form-check-label" for="esp_hosp1">Sim</label>
                                    <input class="form-check-input" style="margin-left: 10px;" name="esp_hosp" type="radio" value="Não" id="esp_hosp2">
                                    <label class="form-check-label" style="margin-left: 30px;" for="esp_hosp2">Não</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTipo_esp">Caso necessite, qual(ais)?</label>
                                <input type="text" name="tipo_esp" class="form-control" id="Tipo_esp">
                            </div>
                        </div>
                        <!-- Inicio da etapa 3 -->
                        <div id="step_3" class="step">
                            <div class="form-group">
                                <label for="inputAlerg">Possui alergia(s)?</label>
                                <div class="form-check">
                                    <input class="form-check-input" name="alerg_hosp" type="radio" value="Sim" id="alerg_hosp1">
                                    <label class="form-check-label" for="alerg_hosp1">Sim</label>
                                    <input class="form-check-input" style="margin-left: 10px;" name="alerg_hosp" type="radio" value="Não" id="alerg_hosp2">
                                    <label class="form-check-label" style="margin-left: 30px;" for="alerg_hosp2">Não</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputTipo_alerg">Se sim, a que?</label>
                                <input type="text" name="tipo_alerg" class="form-control" id="Tipo_alerg">
                            </div>
                            
                            <div class="form-group">
                                <label for="inputTipo_PlanoSaude">Insira o Plano de Saúde:</label>
                                <select id="id_ps" class="form-control">
                                    <?php
                                    $resultado = consulta_plano();
                                    //   var_dump($resultado);
                                    foreach ($resultado as $linha) {
                                        ?>
                                        <option value="<?= $linha['id_ps'] ?>" class="form-control" id="des_ps" selected > <?= $linha['des_ps'] ?> </option>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputTipo_Hospede">Insira qual o responsável por esse hóspede:</label>
                                <select id="id_resp" class="form-control">
                                    <?php
                                    $resultado = consulta_responsavel();
                                    //   var_dump($resultado);
                                    foreach ($resultado as $linha) {
                                        ?>
                                        <option value="<?= $linha['id_resp'] ?>" class="form-control" id="nome_resp" selected > <?= $linha['nome_resp'] ?> </option>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-secondary" type="submit" name="cadastrar_hospede" role="button" value="Cadastrar">
                            </div>
                        </div>
                    </form>
                    <div>
                        <button style="margin-left: 5px;" class="btn btn-primary" id="prev">Anterior</button>
                        <button style="margin-left: 5px;" class="btn btn-primary" id="next">Próximo</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {

                //Esconde todos os passos e exibe o primeiro ao carregar a página 
                $('.step').hide();
                $('.step').first().show();

                //Exibe no topo em qual passo estamos pela ordem da div que esta visivel
                var passoexibido = function () {
                    var index = parseInt($(".step:visible").index());
                    if (index == 0) {
                        //Se for o primeiro passo desabilita o botão de voltar
                        $("#prev").prop('disabled', true);
                    } else if (index == (parseInt($(".step").length) - 1)) {
                        //Se for o ultimo passo desabilita o botão de avançar
                        $("#next").prop('disabled', true);
                    } else {
                        //Em outras situações os dois serão habilitados
                        $("#next").prop('disabled', false);
                        $("#prev").prop('disabled', false);
                    }
                    $("#passo").html(index + 1);

                };

                //Executa a função ao carregar a página
                passoexibido();

                //avança para o próximo passo
                $("#next").click(function () {
                    $(".step:visible").hide().next().show();
                    passoexibido();
                });

                //retrocede para o passo anterior
                $("#prev").click(function () {
                    $(".step:visible").hide().prev().show();
                    passoexibido();
                });

            });
        </script>

    </body>
</html>