<?php

    require_once 'global.php';

    header("Location: form-venda.php");

    $venda = new Venda();
    $venda->setId($_POST['idvendaModal']);
    $venda->setStatus($_POST['status']);

    Venda::atualizarStatus($venda);

?>