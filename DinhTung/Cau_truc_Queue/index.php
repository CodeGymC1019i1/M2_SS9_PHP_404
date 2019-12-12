<?php
include_once "Queue.php";

$queue = new Queue();

$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

echo $queue->dequeue()."</br>";
echo $queue->dequeue()."</br>";

$queue->isEmpty();
var_dump($queue->isEmpty());
echo "</br>";

$queue->enqueue(4);
$queue->enqueue(5);

echo $queue->dequeue()."</br>";
echo $queue->dequeue()."</br>";
echo $queue->dequeue()."</br>";

$queue->isEmpty();
var_dump($queue->isEmpty());