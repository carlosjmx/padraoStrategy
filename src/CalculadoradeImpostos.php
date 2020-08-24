<?php 

namespace App\PadraoStrategy;

use App\PadraoStrategy\Impostos\Impostos;

class CalculadoradeImpostos {
 
    public function calcula(Orcamento $orcamento, Impostos $imposto ){

            return $imposto->calculaImposto($orcamento);
    }
 
}