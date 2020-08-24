<?php 

require_once "vendor/autoload.php";

use App\PadraoStrategy\Orcamento;
use App\PadraoStrategy\CalculadoradeImpostos;

$calculadora = new CalculadoradeImpostos();
$orcamento = new Orcamento();
$orcamento->valor = 2000;

echo $calculadora->calcula($orcamento, "ISS");

