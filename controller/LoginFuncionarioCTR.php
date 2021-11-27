<?php

session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/LoginFuncionarioDAO.php';


if (isset($_POST['cadastrar_funcionario'])) {
    if (inserir_funcionario()) :
        echo "<script>
        window.alert('Funcionário cadastrado com com sucesso')
        window.location.href='../view/home.php';
        </script>";
    else :
        echo "<script>
        window.alert('Funcionário não cadastrado')
        window.location.href='../view/funcionario.php';
        </script>";
    endif;
}




