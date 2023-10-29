<?php
    session_start(); 
    header("Location: form-login-adm.php");
    //limpar as variáveis de sessão e destruí-las
    unset($_SESSION['login-sessao']);
    unset($_SESSION['senha-sessao']);
    //destruir a sessão
    session_destroy();
?>