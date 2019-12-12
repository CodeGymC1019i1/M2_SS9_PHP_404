<?php

include_once "../stack/Stack.php";

$dataStack = new \StackList\Stack(20);

$dec = 21;

while ($dec > 0) {
    $dataStack->push($bin = $dec % 2);
    $dec = floor($dec / 2);
}

echo implode('',$dataStack->stack);