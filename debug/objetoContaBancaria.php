<?php

require __DIR__ . '/../vendor/autoload.php';

use Marco\DioPhpPoo\ContaBancaria;

$conta = new ContaBancaria();
var_dump($conta->exibirDadosDaConta());