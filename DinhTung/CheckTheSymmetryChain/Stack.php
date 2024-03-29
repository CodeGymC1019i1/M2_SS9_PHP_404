<?php


class Stack
{
public $stack;
public $limit;

public function __construct($limit=10)
{
    $this->stack = array();
    $this->limit = $limit;
}

public function push($item)
{
    if (count($this->stack)< $this->limit) {
        array_unshift($this->stack, $item);
    }else {
        throw new Exception("FULL");
    }
}

public function pop()
{
    if ($this->isEmty()){
        throw new Exception("Stack is empty");
    }else{
      return  array_shift($this->stack);
    }
}

public function isEmty()
{
    return empty($this->stack);
}
}