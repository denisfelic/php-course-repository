<?php


class Conta2
{
    public $nome;
    public $saldo = 0;
    public $cpf;

    public function sacar(float $quantia)
    {
        if ($quantia > 0) {
            if ($this->saldo < $quantia) {
                echo "Saldo insuficiente!" . PHP_EOL;
            } else {
                $this->saldo -= $quantia;
                echo "Saldo efetuado com sucesso!" . PHP_EOL;
            }
        } else {
            echo "Erro ao sacar, digite um valor positivo." . PHP_EOL;
        }
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function deposita(float $valor)
    {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Valor depositado com sucesso." . PHP_EOL;
        } else {
            echo "Erro ao depositar, valor tem que ser maior que zero." . PHP_EOL;
        }
    }

}