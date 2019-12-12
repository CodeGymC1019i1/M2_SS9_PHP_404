<?php


class Patient
{
    private $name;
    private $code;
    public $next;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
        $this->next = null;
    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }
}