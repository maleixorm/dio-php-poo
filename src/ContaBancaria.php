<?php

declare(strict_types=1);

namespace Marco\DioPhpPoo;

abstract class ContaBancaria 
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function exibirDadosDaConta():array
    {
        return [
            'banco' => $this->banco,
            'nomeTitular' => $this->nomeTitular,
            'numeroAgencia' => $this->numeroAgencia,
            'numeroConta' => $this->numeroConta,
            'saldo' => $this->saldo
        ];
    }

    public function depositar(float $valor):string
    {
        $this->saldo += $valor;
        return "Depósito de R$ " . number_format($valor, 2, ",", "") . " realizado.";
    }
    
    public function sacar(float $valor):string
    {
        $this->saldo -= $valor;
        return "Saque de R$ " . number_format($valor, 2, ",", "") . " realizado.";
    }

    public abstract function obterSaldo():string;

    public function __get($item)
    {
        return $this->$item;
    }
}