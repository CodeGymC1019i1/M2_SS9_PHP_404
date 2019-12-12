<?php

include_once "../queue/Queue.php";
include_once "../stack/Stack.php";

function checkPalidrome($checkString) {

    $letters = str_split($checkString);

    $queueList = new \QueueList\Queue();
    $stackList = new \StackList\Stack(100);

    foreach ($letters as $letter) {
        $queueList->enqueue($letter);
        $stackList->push($letter);
    }

    foreach ($letters as $letter) {
        if ($queueList->dequeue() != $stackList->top())
            return false;
    }
    return true;
}

var_dump(checkPalidrome("able"));
var_dump(checkPalidrome("ere"));
var_dump(checkPalidrome("saw"));
var_dump(checkPalidrome("elba"));
var_dump(checkPalidrome("abcdefghgfedcba"));


