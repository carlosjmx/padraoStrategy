<?php 

namespace App\PadraoStrategy\Impostos;

use App\PadraoStrategy\Orcamento;

interface Impostos {

    public function calculaImposto(Orcamento $orcamento ): float;

}