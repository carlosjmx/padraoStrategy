<?php 

namespace App\PadraoStrategy; 

class CalculadoradeImpostos {
 
    public function calcula(Orcamento $orcamento, string $imposto ){

        switch($imposto){
            case "ISS":
                return $orcamento->valor * 0.01;
            case "ICMS":
                return $orcamento->valor * 0.06;
        }
    }
 
}