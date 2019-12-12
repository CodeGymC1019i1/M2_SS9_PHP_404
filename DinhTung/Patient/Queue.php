<?php

include_once "Patient.php";
class Queue
{
    public $front = null;
    public $back = null;

    public function isEmpty()
    {
        return $this->front == null;
    }

    public function enqueue($name,$code)
    {
        $newPatient = new Patient($name,$code);

        if ($this->isEmpty()){
            $this->back = $newPatient;
            $this->front = $this->back;
        }else{
            $current = $this->front;
            $before = null;
            $currentCode = $current->getCode;
            $newCurrentCode = $newPatient->getCode();

            while ($currentCode<$newCurrentCode && $current != null){
                $before = $current;
                $current = $current->next;
            }
            if ($current == null){
                $this->back = $newPatient;

                $before->next = $newPatient;
                $newPatient->next = $current;

                if ($current == $this->front){
                    $this->front = $newPatient;
                }
            }
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty())
            return null;
        $removeNode = $this->front->value;
        $this->front =  $this->front->next;
        return $removeNode;
    }
    public function toString()
    {
        $current = $this->front;
        $listPatient = '';
        while ($current != null) {
            $listPatient .= $current->getName() . " code: " . $current->getCode() . "<br>";
            $current = $current->next;
        }
        return $listPatient;
    }
}