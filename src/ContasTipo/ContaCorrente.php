<?php

namespace Marco\DioPhpPoo\ContasTipo;

use Marco\DioPhpPoo\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        return parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obterSaldo(): string
    {
        $saldoFinal = number_format(($this->saldo - self::TAXA), 2, ",", ".");
        return "Seu saldo atual é: R$ {$saldoFinal}";
    }
}