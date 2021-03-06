<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_hospede() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome_hosp = "";
    $cpf_hosp = "";
    $rg_hosp = "";
    $data_nasc_hosp = "";
    $est_hosp = "";
    $cid_hosp = "";
    $bairro_hosp = "";
    $cep_hosp = "";
    $rua_hosp = "";
    $num_casa_hosp = "";
    $d_hosp = "";
    $tipo_d = "";
    $med_hosp = "";
    $tipo_med = "";
    $esp_hosp = "";
    $tipo_esp = "";
    $alerg_hosp = "";
    $tipo_alerg = "";


    $nome_hosp = $_POST['nome_hosp'];
    $cpf_hosp = $_POST['cpf_hosp'];
    $rg_hosp = $_POST['rg_hosp'];
    $data_nasc_hosp = $_POST['data_nasc_hosp'];
    $est_hosp = $_POST['est_hosp'];
    $cid_hosp = $_POST['cid_hosp'];
    $bairro_hosp = $_POST['bairro_hosp'];
    $cep_hosp = $_POST['cep_hosp'];
    $rua_hosp = $_POST['rua_hosp'];
    $num_casa_hosp = $_POST['num_casa_hosp'];
    $d_hosp = $_POST['d_hosp'];
    $tipo_d = $_POST['tipo_d'];
    $med_hosp = $_POST['med_hosp'];
    $tipo_med = $_POST['tipo_med'];
    $esp_hosp = $_POST['esp_hosp'];
    $tipo_esp = $_POST['tipo_esp'];
    $alerg_hosp = $_POST['alerg_hosp'];
    $tipo_alerg = $_POST['tipo_alerg'];
  


    //if (isset($_POST['nome_hosp'])) {
    // $nome = filter_input(INPUT_POST, 'nome_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['cpf_hosp']) && !empty($_POST['cpf_hosp'])) {
    // $cpf = filter_input(INPUT_POST, 'cpf_hosp', FILTER_SANITIZE_NUMBER_INT);
    // }
    //  if (isset($_POST['rg_hosp'])) {
    //   $rg = filter_input(INPUT_POST, 'rg_hosp', FILTER_SANITIZE_URL);
    // }
    //if (isset($_POST['data_nasc_hosp']) && !empty($_POST['data_nasc_hosp'])) {
    // $data_nasc = filter_input(INPUT_POST, 'data_nasc_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    //}
    //if (isset($_POST['est_hosp'])) {
    // $estado = filter_input(INPUT_POST, 'est_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['cid_hosp']) && !empty($_POST['cid_hosp'])) {
    //   $cidade = filter_input(INPUT_POST, 'cid_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    //}
    // if (isset($_POST['bairro_hosp'])) {
    //   $bairro = filter_input(INPUT_POST, 'bairro_hosp', FILTER_SANITIZE_STRING);
    //}
    // if (isset($_POST['cep_hosp']) && !empty($_POST['cep_hosp'])) {
    //    $cep = filter_input(INPUT_POST, 'cep_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    //}
    // if (isset($_POST['rua_hosp'])) {
    //   $rua = filter_input(INPUT_POST, 'rua_hosp', FILTER_SANITIZE_STRING);
    // }
    //if (isset($_POST['num_casa_hosp']) && !empty($_POST['num_casa_hosp'])) {
    //    $numero_casa = filter_input(INPUT_POST, 'num_casa_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    // if (isset($_POST['d_hosp'])) {
    //     $d_hosp = filter_input(INPUT_POST, 'd_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['tipo_d']) && !empty($_POST['tipo_d'])) {
    //    $tipo_d = filter_input(INPUT_POST, 'tipo_d', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    // if (isset($_POST['med_hosp'])) {
    //     $med_hosp = filter_input(INPUT_POST, 'med_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['tipo_med']) && !empty($_POST['tipo_med'])) {
    //     $tipo_med = filter_input(INPUT_POST, 'tipo_med', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    // if (isset($_POST['esp_hosp'])) {
    //     $esp_hosp = filter_input(INPUT_POST, 'esp_hosp', FILTER_SANITIZE_STRING);
    // }
    //  if (isset($_POST['tipo_esp'])) {
    //   $tipo_esp = filter_input(INPUT_POST, 'tipo_esp', FILTER_SANITIZE_STRING);
    //}
    // if (isset($_POST['alerg_hosp']) && !empty($_POST['alerg_hosp'])) {
    //  $alerg_hosp = filter_input(INPUT_POST, 'alerg_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    //  }
    // if (isset($_POST['tipo_alerg'])) {
    //    $tipo_alerg = filter_input(INPUT_POST, 'tipo_alerg', FILTER_SANITIZE_STRING);
    // }
    //if (isset($_POST['des_ps']) && !empty($_POST['des_ps'])) {
    // $des_ps = filter_input(INPUT_POST, 'des_ps', FILTER_SANITIZE_NUMBER_FLOAT);
    //}
    //$id_ps ='1';
    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome)) {
        try {
            //Cria o script de insert             
            $sql = "INSERT INTO hospede (nome_hosp, cpf_hosp, rg_hosp, data_nasc_hosp, est_hosp, cid_hosp, bairro_hosp, cep_hosp, rua_hosp, num_casa_hosp, d_hosp, tipo_d, med_hosp, tipo_med, esp_hosp, tipo_esp, alerg_hosp, tipo_alerg) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome_hosp);
            $statement->bindParam(2, $cpf_hosp);
            $statement->bindParam(3, $rg_hosp);
            $statement->bindParam(4, $data_nasc_hosp);
            $statement->bindParam(5, $est_hosp);
            $statement->bindParam(6, $cid_hosp);
            $statement->bindParam(7, $bairro_hosp);
            $statement->bindParam(8, $cep_hosp);
            $statement->bindParam(9, $rua_hosp);
            $statement->bindParam(10, $num_casa_hosp);
            $statement->bindParam(11, $d_hosp);
            $statement->bindParam(12, $tipo_d);
            $statement->bindParam(13, $med_hosp);
            $statement->bindParam(14, $tipo_med);
            $statement->bindParam(15, $esp_hosp);
            $statement->bindParam(16, $tipo_esp);
            $statement->bindParam(17, $alerg_hosp);
            $statement->bindParam(18, $tipo_alerg);

            $statement->execute();
            //Verifica a quantidade de linhas afetadas
            if ($statement->rowCount() > 0) {
                return true;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}

function alterar_hospede() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome_hosp = $_POST['nome_hosp'];
    $cpf_hosp = $_POST['cpf_hosp'];
    $rg_hosp = $_POST['rg_hosp'];
    $data_nasc_hosp = $_POST['data_nasc_hosp'];
    $est_hosp = $_POST['est_hosp'];
    $cid_hosp = $_POST['cid_hosp'];
    $bairro_hosp = $_POST['bairro_hosp'];
    $cep_hosp = $_POST['cep_hosp'];
    $rua_hosp = $_POST['rua_hosp'];
    $num_casa_hosp = $_POST['num_casa_hosp'];
    $d_hosp = $_POST['d_hosp'];
    $tipo_d = $_POST['tipo_d'];
    $med_hosp = $_POST['med_hosp'];
    $tipo_med = $_POST['tipo_med'];
    $esp_hosp = $_POST['esp_hosp'];
    $tipo_esp = $_POST['tipo_esp'];
    $alerg_hosp = $_POST['alerg_hosp'];
    $tipo_alerg = $_POST['tipo_alerg'];
    

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($id_hosp)) {
        try {
            //Cria o script de insert             
            $sql = "UPDATE hospede SET  id_hosp = ? WHERE id_hosp = ?";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome_hosp);
            $statement->bindParam(2, $cpf_hosp);
            $statement->bindParam(3, $rg_hosp);
            $statement->bindParam(4, $data_nasc_hosp);
            $statement->bindParam(5, $est_hosp);
            $statement->bindParam(6, $cid_hosp);
            $statement->bindParam(7, $bairro_hosp);
            $statement->bindParam(8, $cep_hosp);
            $statement->bindParam(9, $rua_hosp);
            $statement->bindParam(10, $num_casa_hosp);
            $statement->bindParam(11, $d_hosp);
            $statement->bindParam(12, $tipo_d);
            $statement->bindParam(13, $med_hosp);
            $statement->bindParam(14, $tipo_med);
            $statement->bindParam(15, $esp_hosp);
            $statement->bindParam(16, $tipo_esp);
            $statement->bindParam(17, $alerg_hosp);
            $statement->bindParam(18, $tipo_alerg);
            $statement->execute();
            //Verifica a quantidade de linhas afetadas
            if ($statement->rowCount() > 0) {
                return true;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
            return false;
        }
    }
}

function excluir_hospede() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $id_hosp = $_GET['id_hosp'];
    echo $id_hosp;

    try {
        //Cria o script de insert             
        $sql = "DELETE FROM hospede WHERE id_hosp = ?";
        //Prepara para inserir
        $statement = $conexao->prepare($sql);
        $statement->bindParam(1, $id_hosp);
        $statement->execute();
        //Verifica a quantidade de linhas afetadas
        if ($statement->rowCount() > 0) {
            return true;
        }
    } catch (Exception $ex) {
        echo $ex->getMessage();
        return false;
    }
}

//função padrão para consultar Pessoa, pode receber uma string com os campos (ex: id_pes as Nome) e os valores para o where
function consulta_hospede($campos = '*', $add = '') {
    $sql = "select $campos from hospede $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buscar_plano($campos = '*', $add = '') {
    $sql = "select $campos from plano_saude $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function limpar_sessao() {
    $_SESSION["nome_hosp"] = "";
    $_SESSION["data_nasc_hosp"] = "";
    $_SESSION["rg_hosp"] = "";
    $_SESSION["cpf_hosp"] = "";
    $_SESSION["cid_hosp"] = "";
    $_SESSION["cep_hosp"] = "";
    $_SESSION["bairro_hosp"] = "";
    $_SESSION["rua_hosp"] = "";
    $_SESSION["num_casa_hosp"] = "";
    $_SESSION["d_hosp"] = "";
    $_SESSION["tipo_d"] = "";
    $_SESSION["med_hosp"] = "";
    $_SESSION["tipo_med"] = "";
    $_SESSION["esp_hosp"] = "";
    $_SESSION["tipo_esp"] = "";
    $_SESSION["alerg_hosp"] = "";
    $_SESSION["tipo_alerg"] = "";
    $_SESSION["ps_hosp"] = "";
    return true;
}
