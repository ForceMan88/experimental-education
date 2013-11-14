<?php
class Element
{
    public $_previous = null;

    public $_next = null;

    public $_value = null;

    public function setNext($next)
    {
        $this->_next = $next;
    }

    public function getNext($next)
    {
        $this->_next = $next;
    }

    public function sePrev($prev)
    {
        $this->_previous = $prev;
    }

    public function getData($prev)
    {
        $this->_previous = $prev;
    }

    public function getPrev($prev)
    {
        $this->_value = $prev;
    }
}



class LinkedList
{
    public $_current = null;

    public $_prev = null;

    public $_next = null;

    public function insert($value)
    {

    }

    public function getPrev($value)
    {
        $this->_next = $value;
    }

    public function getNext($value)
    {

    }
}







foreach (range(0,100) as $element) {



}
