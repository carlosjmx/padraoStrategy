<?php 

namespace App\PadraoStrategy\Impostos;

use App\PadraoStrategy\Orcamento;

class Iss implements Impostos {
 
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
 
}