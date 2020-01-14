<?php


function paraLetrasMaiusculas(array &$nome) : array
{
    $nome['titular'] = strtoupper($nome['titular']);
    return $nome;
}


$pessoa = [
    'titular' => 'marcos'
];

echo $pessoa['titular'] . PHP_EOL;
paraLetrasMaiusculas($pessoa); //NOTE QUE NÃO ADICIONEI A NENHUMA NOVA VAR, APENAS CHEMEI O MÉTODO
                                //ISSO SE CHAMA FUNÇÃO POR REFERENCIA.
echo $pessoa['titular'] . PHP_EOL;
    