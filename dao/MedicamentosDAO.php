<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_hospede() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome_med = "";
    $dose_med = "";
    $composicao_med = "";
    $periodico_med = "";
    $data_inicio_med = "";
    $data_fim_med = "";
    $obs_med = "";

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome)) {
        //Cria o script de insert 
        try {
            $sql = "INSERT INTO hospede (nome_med, dose_med, composicao_med, periodico_med, data_inicio_med, data_fim_med, obs_med) VALUE (?,?,?,?,?,?,?);";
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

//função padrão para consultar Pessoa, pode receber uma string com os campos (ex: id_pes as Nome) e os valores para o where
function consulta_medicamentos($campos = '*', $add = '') {
    
    $sql = "select $campos from medicamentos $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
