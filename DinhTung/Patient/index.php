<?php

include_once "Queue.php";
$queuePatient = new Queue();
$queuePatient->enqueue("tung", 3);
$queuePatient->enqueue("hai", 1);
$queuePatient->enqueue("dan", 1);
$queuePatient->enqueue("an", 5);
$queuePatient->enqueue("khoi", 4);
echo ($queuePatient->toString()); echo "<br>";
echo $queuePatient->dequeue();
echo ($queuePatient->toString());
echo $queuePatient->dequeue();
echo ($queuePatient->toString());