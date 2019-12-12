<?php


class Stack
{
    public $stack;
    public $limit;

    public function __construct($limit, $stack = [])
    {
        $this->stack = $stack;
        $this->limit = $limit;
    }

    public function push($item)
    {
        if (count($this->stack) >= $this->limit) {
            throw new RunTimeException('Stack is full!');
        } else {
            array_unshift($this->stack, $item);
        }
    }

    public function pop()
    {
        if (count($this->stack) > $this->limit) {
            throw new RunTimeException('Stack is full!');
        } else {
            array_shift($this->stack);
        }
    }

    public function top()
    {
        $value = $this->stack[0];
        array_shift($this->stack);
        return $value;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}