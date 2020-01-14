<?php
echo "Olá " . PHP_EOL;

for ($i = 0; $i <= 100; $i ++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}

for ($c = 1; $c <= 10; $c ++) {
    for ($i = 1; $i <= 10; $i ++) {
        echo "$c x $i = ".($c*$i). PHP_EOL;
    }
    echo "----------------------------------".PHP_EOL;
}