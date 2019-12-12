<?php

include_once "Node.php";

class Queue
{
    public $front = null;
    public $back = null;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($value)
    {
        $currentBack = $this->back;

        $this->back = new \Queue\Node($value);

        if ($this->isEmpty())
            $this->front = $this->back;
        else
            $currentBack->next = $this->back;
    }

    public function dequeue()
    {
        if ($this->isEmpty())
            return null;

        $removeNode = $this->front->value;
        $this->front =  $this->front->next;
        return $removeNode;
    }
}