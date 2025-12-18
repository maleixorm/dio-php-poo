<?php

namespace Marco\DioPhpPoo\ContasTipo;

use Marco\DioPhpPoo\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 0.03;
    const TIPO_CONTA = "Conta Poupança";

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        return parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obterSaldo(): string
    {
        $saldoFinal = number_format($this->saldo + ($this->saldo * self::RENDIMENTO));
        return "Seu saldo atual é: R$ {$saldoFinal}";
    }
}