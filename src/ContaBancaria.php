<?php

declare(strict_types=1);

namespace Marco\DioPhpPoo;

class ContaBancaria 
{
    private string $banco;
    private string $nomeTitular = "Gustavo Fraga";
    private string $numeroAgencia = "8244-5";
    private string $numeroConta = "57354-10";
    private float $saldo = 0;

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