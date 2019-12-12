<?php

include_once "../stack/Stack.php";

$listInterger = new \StackList\Stack(10);

$listInterger->push(1);
$listInterger->push(2);
$listInterger->push(3);
$listInterger->push(4);
$listInterger->push(5);

var_dump($listInterger->stack);

$array = [];

array_push($array,$listInterger->top());
array_push($array,$listInterger->top());
array_push($array,$listInterger->top());
array_push($array,$listInterger->top());
array_push($array,$listInterger->top());

for ($i = 0; $i < count($array); $i++)
    $listInterger->push($array[$i]);
var_dump($listInterger->stack);

