<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_plano()
{
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $des_ps = "";
    $des_ps = $_POST['des_ps'];


    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($des_ps)) {
        try {
            //Cria o script de insert             
            $sql = "INSERT INTO plano_saude (des_ps)VALUES (?);";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $des_ps);
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
function alterar_plano()
{
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $id_ps = $_POST['id_ps'];
    $des_ps = $_POST['des_ps'];


    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($des_ps)) {
        try {
            //Cria o script de insert             
            $sql = "UPDATE plano_saude SET des_ps  = ? WHERE id_ps = ?";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $des_ps);
            $statement->bindParam(2, $id_ps);
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
function excluir_plano()
{
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $id_ps = $_POST['id_ps'];

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($des_ps)) {
        try {
            //Cria o script de insert             
            $sql = "DELETE FROM plano_saude  WHERE id_ps = ?";
            //Prepara para inserir
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $id_ps);
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
function consulta_plano($campos = '*', $add = '')
{
    $sql = "select $campos from plano_saude $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

