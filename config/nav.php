
<nav class="navbar navbar-light bg-light clearfix">
    <a href="../view/FormLogin.php"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d7/Gnome-home.svg/1200px-Gnome-home.svg.png" class="h-auto d-inline-block align-top float-left rounded-circle" alt="" width="30px">
    </a>
    <a class="navbar-brand float-left" href="../view/FormHospede.php">       
        Cadastro de Usuário
    </a>
    <?php
    if (isset($_SESSION['nome'])) {
        echo "<span class='float-right'> <h1>  " . $_SESSION['nome'] . " </h1> </span>";
        ?>

    <form class="float-right" method="POST" action="../controller/HospedeCTR.php" >
        <input class="btn btn-primary"  type="submit" name="logout" value="Sair">
    </form>
     <?php
        }
    ?>
</nav>
