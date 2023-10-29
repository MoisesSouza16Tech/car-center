<?php
    require_once "../models/categoria.php";

    class categoriaController{

        public $categoria;

        public function __construct($categoria){
            $this->categoria = $categoria;
        }

        public function validaNome($categoria, $nomeCategoria){
            $existente = false;

            for($i = 0; $i < count($nomeCategoria); $i++){
                if(strtoupper($categoria->getNomeCategoria()) == strtoupper($nomeCategoria[$i][1]) && $categoria->getIdCategoria() != $nomeCategoria[$i][0]) {
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