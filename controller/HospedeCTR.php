<?php
session_start();
include_once '../config/cabecalho.php';
include_once '../config/bdconfig.php';
include_once '../dao/HospedeDAO.php';


if (isset($_POST['cadastrar_hospede'])) {
    if (inserir_hospede()) :
        echo "<script>
        window.alert('Hóspede inserido com sucesso')
        window.location.href='../view/home.php';
        </script>";
    else :
        echo "<script>
        window.alert('Hóspede não inserido')
        window.location.href='../view/cadastro.php';
        </script>";
    endif;
} 
 