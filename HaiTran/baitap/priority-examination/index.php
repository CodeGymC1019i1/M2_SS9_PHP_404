<?php

include_once "QueuePatient.php";

$queuePatient = new QueuePatient();

$queuePatient->enqueue("tung", 10);
$queuePatient->enqueue("long", 9);
$queuePatient->enqueue("long", 11);
$queuePatient->enqueue("long", 5);
$queuePatient->enqueue("long", 5);

echo ($queuePatient->toString()); echo "<br>";

echo $queuePatient->dequeue();
echo ($queuePatient->toString());
echo $queuePatient->dequeue();
echo ($queuePatient->toString());