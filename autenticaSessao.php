<?php
    //recebe os dados do forms
    $login = $_POST['nome_login'];
    $senha = $_POST['senha_login'];
    //confere se as credenciais estão corretas login = adm e senha = 123
    if( ($login == 'adm') && ($senha == '123') ){
        //se sim, cria a sessão e redireciona para a área restrita de acesso
        header("Location: area-restrita/adm-dashboard.php");
        session_start();
        $_SESSION['login-sessao'] = $login;
        $_SESSION['senha-sessao'] = $senha;
    }
    else{
        //senão, retorna o usuário para a área de login
        header("Location: form-login-adm.php");
    }
?>