<?php
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/ResponsavelDAO.php';
 

if (isset($_POST['cadastrar_responsavel'])) {
    if (inserir_responsavel()) :
        echo "<script>
        window.alert('Responsável inserido com sucesso')
        window.location.href='../view/home.php';
        </script>";
    else :
        echo "<script>
        window.alert('Responsável não inserido')
        window.location.href='../view/responsavel.php';
        </script>";
    endif;
    }