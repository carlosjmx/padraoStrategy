<?php 

namespace App\PadraoStrategy\Impostos;

use App\PadraoStrategy\Orcamento;

class Icms implements Impostos {
 
    public function calculaImposto(Orcamento $orcamento): float{
         
        return $orcamento->valor * 0.01;

    }
 
}