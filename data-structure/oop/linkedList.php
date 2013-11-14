<?php
class Element
{
    public $_previous = null;

    public $_next = null;

    public $_value = null;


    public function __construct($val)
    {
        $this->setData($val);
    }

    public function setNext($next)
    {
        $this->_next = $next;
    }

    public function getNext($next)
    {
        return $this->_next = $next;
    }

    public function sePrev($prev)
    {
        $this->_previous = $prev;
    }

    public function setData($val)
    {
        $this->_value = $val;
    }

    public function getData()
    {
        return $this->_value;
    }

    public function getPrev()
    {
        return $this->_previous;
    }
}


class LinkedList
{
    protected $_count = 0;

    public $_current = null;
    public $_last = null;
    public $_first = null;

    public function push($element)
    {
        if ($this->isEmpty()) {
            $this->_current = $element;
            $this->_first = $element;
        } else {
            $element->setPrev($this->_current);
            $this->_current->setNext($element);
            $this->_current = $element;
        }

        $this->_last = $element;
        $this->_count++;
    }

    public function isEmpty()
    {
        return $this->_count == 0;
    }

    public function prev()
    {
        return ($this->current() && $prev = $this->current->getPrev()) ? $prev : false;
    }

    public function next()
    {
        return ($this->current() && $next = $this->current->getnext()) ? $next : false;
    }

    public function setCurrent($current)
    {
        $this->_current = $current;
    }

    public function shift()
    {

    }

    public function unshift()
    {

    }

    public function pop()
    {

    }


}

