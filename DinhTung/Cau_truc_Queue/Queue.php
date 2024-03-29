<?php
include "Node.php";
class Queue
{
public $front=null;
public $back=null;

public function isEmpty()
{
    return $this->front == null;
}

public function enqueue($value)
{
    $oldBack = $this->back;
    $this->back = new Node();
    $this->back->value = $value;
    if ($this->isEmpty()){
        $this->front = $this->back;
    }else{
        $oldBack->next = $this->back;
    }
}

public function dequeue()
{
    if ($this->isEmpty()){
        return null;
    }
    $removedValue = $this->front->value;
    $this->front = $this->front->next;
    return $removedValue;

}
}