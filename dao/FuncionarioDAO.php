<?php

//inclui a conexão com o banco se ainda não foi incluída
include_once '../config/bdconfig.php';

function inserir_funcionario() {
    //inicia as variáveis com os valores eperados para dados em branco
    $conexao = conexao();
    $nome = "";
    $cpf = "";
    $rg = "";
    $estado = "";
    $cidade = "";
    $bairro = "";
    $cep = "";
    $rua = "";
    $numero_casa = "";
    $tel = "";
    $senha_func = "";

    //verifica se realmente o Nome (dado que não pode estar em branco) está preenchido
    if (!empty($nome)) {
        try {
            //Cria o script de insert             
            $sql = "INSERT INTO hospede (nome_func, cpf_func, rg_func, est_func, cid_func, bairro_func, cep_hosfunc, rua_func, num_casa_func, tel_func, senha_func) VALUE (?,?,?,?,?,?,?,?,?,?,?);";
            //Prepara para inserir  
            $statement = $conexao->prepare($sql);
            $statement->bindParam(1, $nome);
            $statement->bindParam(2, $cpf);
            $statement->bindParam(3, $rg);
            $statement->bindParam(5, $estado);
            $statement->bindParam(6, $cidade);
            $statement->bindParam(7, $bairro);
            $statement->bindParam(8, $cep);
            $statement->bindParam(9, $rua);
            $statement->bindParam(10, $numero_casa);
            $statement->bindParam(11, $tel);
            $statement->bindParam(12, $senha_func);

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
function consulta_funcionario($campos = '*', $add = '') {
    
    $sql = "select $campos from funcionario $add";
    $conexao = conexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
