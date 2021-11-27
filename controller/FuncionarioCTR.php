<?php
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/FuncionarioDAO.php';
 

if (isset($_POST['cadastrar_funcionario'])) {
    if (inserir_plano()) :
        echo "<script>
        window.alert('Funcionário inserido com sucesso')
        window.location.href='../view/home.php';
        </script>";
    else :
        echo "<script>
        window.alert('Funcionário não inserido')
        window.location.href='../view/funcionario.php';
        </script>";
    endif;
    }


