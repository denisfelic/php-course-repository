<?php
echo "Arquivo de funções carregado".PHP_EOL;

function exibirMenssagem($msg)
{
    echo $msg . PHP_EOL;
}

function olaMundo()
{
    echo "Olá Mundo!" . PHP_EOL;
}

function somaDoisNumeros($n1, $n2): float
{
    return $n1 + $n2;
}

function sacar($conta, $valor)
{
    if ($valor > $conta['saldo']) {
        exibirMenssagem("Você não pode sacar pois não tem saldo");
        return $conta;
    } else {
        $conta["saldo"] -= $valor;
        exibirMenssagem("Saque efetuado com sucesso!");
        return $conta;
    }
}

function deposita(array $conta, int $valor): array
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
        return $conta;
        exibirMenssagem("Deposito efetuado com sucesso!");
    } else {
        exibirMenssagem("Valor invalido, digite um valor acima de 0.");
        return $conta;
    }
}