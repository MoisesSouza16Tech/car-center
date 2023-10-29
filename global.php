<?php
    spl_autoload_register('carregarClasse');

    function carregarClasse($nomeClasse){
        if (file_exists('models/'.$nomeClasse.'.php')){
            require_once 'models/'.$nomeClasse.'.php';
        }
    }
?>