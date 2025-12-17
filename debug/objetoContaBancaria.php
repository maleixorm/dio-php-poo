<?php

require __DIR__ . '/../vendor/autoload.php';

use Marco\DioPhpPoo\ContaBancaria;

$conta = new ContaBancaria('Banco do Brasil', 'Gustavo Fraga', '8244-5', '57354-7', 0);
var_dump($conta->exibirDadosDaConta());