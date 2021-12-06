<?php

session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/HospedeDAO.php';


if (isset($_POST['cadastrar_hospede'])) {
    if (isset($_POST["id_hosp"]) && !empty($_POST["id_hosp"])) {
        if (alterar_hospede()) {
            echo "<script>
        window.alert('Hóspede alterado com sucesso')
        window.location.href='../view/hospede.php';
        </script>";
        } else {
            echo "<script>
        window.alert('Hóspede não alterado')
        window.location.href='../view/hospede.php';
        </script>";
        }
    } else if (inserir_hospede()) {
        echo "<script>
        window.alert('Hóspede inserido com sucesso')
        window.location.href='../view/hospede.php';
        </script>";
    } else {
        echo "<script>
        window.alert('Hóspede não inserido')
      
        </script>";
    }
}

if (isset($_GET["id_hosp"]) && !empty($_GET["id_hosp"])) {
    if (excluir_hospede()) {
        echo "<script>
            window.alert('Hóspede excluido com sucesso')
            window.location.href='../view/hospede.php';
            </script>";
    } else {
        echo "<script>
            window.alert('Hóspede não excluido')
            window.location.href='../view/hospede.php';
            </script>";
    }
}
