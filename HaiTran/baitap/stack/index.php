<?php

include_once "Stack.php";

$stacklist = new Stack(6);

$stacklist->push(1);
$stacklist->push(2);
$stacklist->push(3);
$stacklist->push(4);
$stacklist->push(5);

var_dump($stacklist->stack);

$stacklist->pop();
$stacklist->pop();
$stacklist->pop();

var_dump($stacklist->stack);

$stacklist->push(3);
$stacklist->push(4);

var_dump($stacklist->isEmpty());

$stacklist->pop();$stacklist->pop();$stacklist->pop();$stacklist->pop();

var_dump($stacklist->isEmpty());