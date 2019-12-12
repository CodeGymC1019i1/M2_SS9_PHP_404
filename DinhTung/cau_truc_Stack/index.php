<?php
include "Stack.php";
$myBook = new Stack();

$myBook->push("doremon");
$myBook->push("onpiece");
$myBook->push("naruto");
$myBook->push("conan");
$myBook->push("bleach");

echo $myBook->pop()."</br>";
echo $myBook->pop()."</br>";
echo $myBook->pop()."</br>";

$myBook->push("1");
$myBook->push("2");

$myBook->isEmpty();
var_dump($myBook->isEmpty());
echo "</br>";
echo $myBook->pop()."</br>";
echo $myBook->pop()."</br>";
echo $myBook->pop()."</br>";
echo $myBook->pop()."</br>";

$myBook->isEmpty();
var_dump($myBook->isEmpty());
die();



