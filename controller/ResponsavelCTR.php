<?php
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/ResponsavelDAO.php';
 

if (isset($_POST['cadastrar_responsavel'])) {
    if (isset($_POST["id_resp"]) && !empty($_POST["id_resp"])) {
        if (alterar_responsavel()) {
            echo "<script>
        window.alert('Responsável alterado com sucesso')
        window.location.href='../view/responsavel.php';
        </script>";
        } else {
            echo "<script>
        window.alert('Responsável não alterado')
        window.location.href='../view/responsavel.php';
        </script>";
        }
    } else if (inserir_responsavel()) {
        echo "<script>
        window.alert('Responsável inserido com sucesso')
        window.location.href='../view/responsavel.php';
        </script>";
    } else {
        echo "<script>
        window.alert('Responsável não inserido')
        window.location.href='../view/responsavel.php';
        </script>";
    }
}

if (isset($_GET["id_resp"]) && !empty($_GET["id_resp"])) {
    if (excluir_responsavel()) {
        echo "<script>
            window.alert('Responsável excluido com sucesso')
            window.location.href='../view/responsavel.php';
            </script>";
    } else {
        echo "<script>
            window.alert('Responsável não excluido')
            window.location.href='../view/responsavel.php';
            </script>";
    }
}