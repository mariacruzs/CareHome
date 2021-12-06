<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_medicamento() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome_med = "";
    $dose_med = "";
    $composicao_med = "";
    $periodico_med = "";
    $data_inicio_med = "";
    $data_fim_med = "";
    $obs_med = "";
    $id_hosp = "";

    $nome_med = $_POST['nome_med'];
    $dose_med = $_POST['dose_med'];
    $composicao_med = $_POST['composicao_med'];
    $periodico_med = $_POST['periodico_med'];
    $data_inicio_med = $_POST['data_inicio_med'];
    $data_fim_med = $_POST['data_fim_med'];
    $obs_med = $_POST['obs_med'];
    $id_hosp = '';

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome)) {
        //Cria o script de insert 
        try {
            $sql = "INSERT INTO medicamentos (nome_med, dose_med, composicao_med, periodico_med, data_inicio_med, data_fim_med, obs_med) VALUE (?,?,?,?,?,?,?);";
            //Prepara para inserir  
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome_med);
            $statement->bindParam(2, $dose_med);
            $statement->bindParam(3, $composicao_med);
            $statement->bindParam(4, $periodico_med);
            $statement->bindParam(5, $data_inicio_med);
            $statement->bindParam(6, $data_fim_med);
            $statement->bindParam(7, $obs_med);

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

function alterar_medicamento() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $id_med = $_POST['id_med'];
    $nome_med = $_POST['nome_med'];
    $dose_med = $_POST['dose_med'];
    $composicao_med = $_POST['composicao_med'];
    $periodico_med = $_POST['$periodico_med'];
    $data_inicio_med = $_POST['$data_inicio_med'];
    $data_fim_med = $_POST['$data_fim_med'];
    $obs_med = $_POST['$obs_med'];


    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome_med)) {
        try {
            //Cria o script de insert             
            $sql = "UPDATE medicamentos SET nome_med  = ? WHERE id_med = ?";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome_med);
            $statement->bindParam(2, $dose_med);
            $statement->bindParam(3, $composicao_med);
            $statement->bindParam(4, $periodico_med);
            $statement->bindParam(5, $data_inicio_med);
            $statement->bindParam(6, $data_fim_med);
            $statement->bindParam(7, $obs_med);
            $statement->bindParam(8, $id_med);
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

function excluir_medicamento() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $id_ps = $_GET['id_med'];
    echo $id_med;

    try {
        //Cria o script de insert             
        $sql = "DELETE FROM medicamentos WHERE id_med = ?";
        //Prepara para inserir
        $statement = $conexao->prepare($sql);
        $statement->bindParam(1, $id_med);
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
function consulta_medicamentos($campos = '*', $add = '') {

    $sql = "select $campos from medicamentos $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
