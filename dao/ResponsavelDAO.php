<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_responsavel()
{
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome = "";
    $tel = "";
    $cel = "";
    $estado = "";
    $cidade = "";
    $bairro = "";
    $cep = "";
    $rua = "";
    $numero_casa = "";
    $id_hosp = "";

    // if (isset($_POST['nome_hosp'])) {
    //     $nome = filter_input(INPUT_POST, 'nome_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['cel_resp'])) {
    //     $cel = filter_input(INPUT_POST, 'cel_resp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['tel_resp'])) {
    //     $tel = filter_input(INPUT_POST, 'tel_resp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['est_hosp'])) {
    //     $estado = filter_input(INPUT_POST, 'est_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['cid_hosp']) && !empty($_POST['cid_hosp'])) {
    //     $cidade = filter_input(INPUT_POST, 'cid_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    // if (isset($_POST['bairro_hosp'])) {
    //     $bairro = filter_input(INPUT_POST, 'bairro_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['cep_hosp']) && !empty($_POST['cep_hosp'])) {
    //     $cep = filter_input(INPUT_POST, 'cep_hosp', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    // if (isset($_POST['rua_hosp'])) {
    //     $rua = filter_input(INPUT_POST, 'rua_hosp', FILTER_SANITIZE_STRING);
    // }
    // if (isset($_POST['num_casa_resp']) && !empty($_POST['num_casa_hosp'])) {
    //     $numero_casa = filter_input(INPUT_POST, 'num_casa_resp', FILTER_SANITIZE_NUMBER_FLOAT);
    // }
    $nome = $_POST['nome_resp'];
    $tel = $_POST['tel_resp'];
    $cel = $_POST['cel_resp'];
    $estado = $_POST['est_resp'];
    $cidade = $_POST['cid_resp'];
    $bairro = $_POST['bairro_resp'];
    $cep = $_POST['cep_resp'];
    $rua = $_POST['rua_resp'];
    $numero_casa = $_POST['num_casa_resp'];
    $id_hosp = '3';

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome)) {
        try {
            //Cria o script de insert             
            $sql = "INSERT INTO responsavel (nome_resp,tel_resp,cel_resp,est_resp,cid_resp,bairro_resp,cep_resp,rua_resp,num_casa_resp,id_hosp)VALUES (?,?,?,?,?,?,?,?,?,?);";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome);
            $statement->bindParam(2, $tel);
            $statement->bindParam(3, $cel);
            $statement->bindParam(4, $estado);
            $statement->bindParam(5, $cidade);
            $statement->bindParam(6, $bairro);
            $statement->bindParam(7, $cep);
            $statement->bindParam(8, $rua);
            $statement->bindParam(9, $numero_casa);
            $statement->bindParam(10, $id_hosp);
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

//função padrão para consultar Pessoa, pode receber uma string com os campos (ex: id_pes as Nome) e os valores para o where
function consulta_responsavel($campos = '*', $add = '')
{
    $sql = "select $campos from responsavel $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
