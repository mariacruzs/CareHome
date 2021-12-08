<?php
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/MedicamentosDAO.php';
 

if (isset($_POST['cadastrar_medicamento'])) {
      if (isset($_POST["id_med"]) && !empty($_POST["id_med"])) {
        if (alterar_medicamento()) {
            echo "<script>
        window.alert('Medicamento alterado com sucesso')
        window.location.href='../view/medicamentos.php';
        </script>";
        } else {
            echo "<script>
        window.alert('Medicamento não alterado')
        window.location.href='../view/medicamentos.php';
        </script>";
        }
    } else if (inserir_medicamento()) {
        echo "<script>
        window.alert('Medicamento inserido com sucesso')
        window.location.href='../view/medicamentos.php';
        </script>";
    } else {
        echo "<script>
        window.alert('Medicamento não inserido')
        window.location.href='../view/medicamentos.php';
        </script>";
    }
}

if (isset($_GET["id_med"]) && !empty($_GET["id_med"])) {
    if (excluir_medicamento()) {
        echo "<script>
            window.alert('Medicamento excluido com sucesso')
            window.location.href='../view/medicamentos.php';
            </script>";
    } else {
        echo "<script>
            window.alert('Medicamento não excluido')
            window.location.href='../view/medicamentos.php';
            </script>";
    }
}

