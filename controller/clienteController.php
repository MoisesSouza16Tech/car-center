<?php
    require_once "global.php";


    class clienteController{

        public $cliente;

        public function __construct($cliente){
            $this->cliente = $cliente;
        }

        public function verificaCpf($cliente, $cpfCliente){
            $existente = false;

            for($i = 0; $i < count($cpfCliente); $i++){
                if(strtoupper($cliente->getCpfCliente()) == strtoupper($cpfCliente[$i][2])) {
                    $existente = true;
                    break;
                }else{
                    $existente = false;
                }
            }
            return $existente;
        }

    }


?>