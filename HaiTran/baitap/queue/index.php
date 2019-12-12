<?php

include_once "Queue.php";

$queueList = new \QueueList\Queue();

$queueList->enqueue(1);
$queueList->enqueue(2);
$queueList->enqueue(3);

var_dump($queueList->dequeue());
var_dump($queueList->dequeue());

var_dump($queueList->isEmpty());

$queueList->enqueue(4);
$queueList->enqueue(5);

var_dump($queueList->dequeue());
var_dump($queueList->dequeue());
var_dump($queueList->dequeue());

var_dump($queueList->isEmpty());