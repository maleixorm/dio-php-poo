<?php

require __DIR__ . '/../vendor/autoload.php';

use Marco\DioPhpPoo\ContasTipo\ContaPoupanca;
use Marco\DioPhpPoo\Contratos\DadosContaBancariaInterface;
use Marco\DioPhpPoo\Contratos\OperacoesContaBancariaInterface;

function executarOperacoes(OperacoesContaBancariaInterface $conta): void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(500);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
    
    echo $conta->sacar(30);
    echo PHP_EOL;
    
    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta): void
{    
    echo "Banco: " . $conta->getBanco();
    echo PHP_EOL;
    
    echo "Ag./Conta: " . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "--------------------------------------------";
    echo PHP_EOL;
}

$conta = new ContaPoupanca('Banco do Brasil', 'Gustavo Fraga', '8244-5', '00170957354-7', 0);
exibirDados($conta);
executarOperacoes($conta);