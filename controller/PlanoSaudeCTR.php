<?php

include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/PlanoSaudeDAO.php';


if (isset($_POST['cadastrar_plano'])) {
    if (isset($_POST["id_ps"]) && !empty($_POST["id_ps"])) {
        if (alterar_plano()) {
            echo "<script>
        window.alert('Plano de Saúde alterado com sucesso')
        window.location.href='../view/planosaude.php';
        </script>";
        } else {
            echo "<script>
        window.alert('Plano de Saúde não alterado')
        window.location.href='../view/planosaude.php';
        </script>";
        }
    } else if (inserir_plano()) {
        echo "<script>
        window.alert('Plano de Saúde inserido com sucesso')
        window.location.href='../view/planosaude.php';
        </script>";
    } else {
        echo "<script>
        window.alert('Plano de Saúde não inserido')
        window.location.href='../view/planosaude.php';
        </script>";
    }
}

if (isset($_GET["id_plano"]) && !empty($_GET["id_plano"])) {
    if (excluir_plano()) {
        echo "<script>
            window.alert('Plano de Saúde excluido com sucesso')
            window.location.href='../view/planosaude.php';
            </script>";
    } else {
        echo "<script>
            window.alert('Plano de Saúde não excluido')
            window.location.href='../view/planosaude.php';
            </script>";
    }
}
