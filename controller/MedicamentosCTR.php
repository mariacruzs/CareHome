<?php
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/MedicamentosDAO.php';
 

if (isset($_POST['cadastrar_medicamentos'])) {
    if (inserir_responsavel()) :
        echo "<script>
        window.alert('Medicamentos inseridos com sucesso')
        window.location.href='../view/home.php';
        </script>";
    else :
        echo "<script>
        window.alert('Medicamentos não inseridos')
        window.location.href='../view/medicamentos.php';
        </script>";
    endif;
    }

