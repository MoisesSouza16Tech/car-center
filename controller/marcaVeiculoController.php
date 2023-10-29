<?php
    require_once "../models/marcaVeiculo.php";

    class marcaveiculoController{

        public $marcaVeiculo;

        public function __construct($marcaVeiculo){
            $this->marcaVeiculo = $marcaVeiculo;
        }

        public function validaNome($marcaVeiculo, $nomeMarcaVeiculo){
            $existente = false;

            for($i = 0; $i < count($nomeMarcaVeiculo); $i++){
                if(strtoupper($marcaVeiculo->getNomeMarcaVeiculo()) == strtoupper($nomeMarcaVeiculo[$i][1])) {
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