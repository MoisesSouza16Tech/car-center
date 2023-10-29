<?php
    header("Location: ../index.php");
    
    session_start();
    unset($_SESSION['idCliente']);
    unset($_SESSION['nomeCliente']);
    unset($_SESSION['loginCliente']);
    unset($_SESSION['senhaCliente']);
    session_destroy();
?>
