<?php
    $cpf = $_POST['cpf'];

    // echo($cpf . "<br>");

    //removendo os pontos do cpf
    $cpf = str_replace(".","",$cpf);
    //removendo o traço do cpf
    $cpf = str_replace("-","",$cpf);

    // echo($cpf);

    //criando um vetor
    $vetorCpf = array();

    //separando os dígitos do cpf um em cada posição do vetor
    
    //length = tamanho/elementos
    for($i = 0; $i < ( strlen($cpf) ); $i++){ 
        //substring = pega um pedaço da string
        $vetorCpf[$i] = substr($cpf,$i,1); 
        //substr(variavel, início, qtde)
        //substr("amor", 2, 2) = or
        //substr("amor", 0, 1) = a
        // echo("<br>vetor[".$i."] = ".$vetorCpf[$i]);
    }

    //cálculo do 1º dígito do CPF
    $contador = 10;
    $soma1 = 0;

    for($i = 0; $i < 9; $i++){
        $soma1 = $soma1 + ($vetorCpf[$i] * $contador);
        $contador--;
    }

    $resto1 = ($soma1 % 11);

    if ($resto1 < 2){
        $digito1 = 0;
    }
    else{
        $digito1 = 11 - $resto1;
    }
    
    // echo("<br>".$digito1);













    // //cáldulo do 2º digito do CPF
    $contador = 11;
    $soma2 = 0;
    for($i = 0; $i < 9; $i++){
        $soma2 = $soma2 + ($vetorCpf[$i] * $contador);
        $contador--;
    }
    $soma2 = $soma2 + ($digito1 * $contador);
    
    $digito2 = ($soma2 % 11);
    
    if ($digito2 < 2)
        $digito2 = 0;
    else
        $digito2 = 11 - $digito2;
    
    //verificando se os dígitos informados são iguais aos calculados
    if(($digito1 == $vetorCpf[9]) && ($digito2 == $vetorCpf[10]))
        echo("<h1>CPF válido</h1>");
    else
        echo("<h1>CPF inválido</h1>");
    
?>