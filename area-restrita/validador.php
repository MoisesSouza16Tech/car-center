<?php
    session_start();
    if( ($_SESSION['login-sessao'] != 'adm') || ($_SESSION['senha-sessao'] != '123') ){
        header("Location: ../form-login-adm.php");
    }
?>