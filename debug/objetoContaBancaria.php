<?php

require __DIR__ . '/../vendor/autoload.php';

use Marco\DioPhpPoo\ContaBancaria;

$conta = new ContaBancaria();
$conta->setBanco("Banco do Brasil");
var_dump($conta->getBanco());