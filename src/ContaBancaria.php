<?php

declare(strict_types=1);

namespace Marco\DioPhpPoo;

class ContaBancaria 
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
            'nomeTitular' => $this->nomeTitular,
            'numeroConta' => $this->numeroConta
        ];
    }

    public function setBanco(string $banco):void
    {
        $this->banco = $banco;
    }

    public function getBanco():string
    {
        return $this->banco;
    }
}