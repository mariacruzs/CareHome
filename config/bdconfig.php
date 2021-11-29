<?php

const DRIVE = "pgsql";
const ENDERECO = "localhost";
const PORTA = "5432";
const DBNAME = "Projeto_Care_Home";
const USER = "postgres";
const PASSWORD = "1234";
//const PASSWORD = "1234";

try {

    function conexao() {
        $conexao = new PDO(DRIVE . ":host=" . ENDERECO . ";port=" . PORTA
                . ";dbname=" . DBNAME . ";user=" . USER . ";password=" . PASSWORD);
        $conexao->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO:: ATTR_EMULATE_PREPARES, false);

        if ($conexao) {
            return $conexao;
        }
    }

} catch (PDOException $erro) {
    echo "Não foi possível realizar a conexão! <br>";
    echo $erro->getMessage();
}

function consulta($consulta) {
    $conn = conexao();
    $stmt = $conn->prepare($consulta);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

//função para limpar um determinado $campo string ou inteiro
// $int deve ser = false quando o campo é do tipo string e true quando for inteiro
// retorna o valor após a sanitização do campo, caso o campo seja vazio retorna "" ou 0;
function limpar($campo, $int = false) {
    // Verifica se o campo não é inteiro
    if (!$int) {
        if (!empty($campo)) {
            return filter_var($campo, FILTER_SANITIZE_STRING);
        }
        return "";
    } else {
        if (!empty($campo)) {
            return filter_var($campo, FILTER_SANITIZE_NUMBER_INT);
        }
        return 0;
    }
}