<?php
class Element
{
    public $_previous = false;

    public $_next = false;

    public $_value = false;


    public function __construct($val)
    {
        $this->setData($val);
    }

    public function setNext($next)
    {
        $this->_next = $next;
    }

    public function getNext()
    {
        return $this->_next;
    }

    public function setPrev($prev)
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

    protected $_current = false;

    protected $_last = false;

    protected $_first = false;

    public function push(Element $element)
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

    public function unshift($element)
    {
        if ($this->isEmpty()) {
            $this->_current = $element;
            $this->_last = $element;
        } else {
            $this->_first->setPrev($element);
            $element->setNext($this->_first);
        }

        $this->_first = $element;
        $this->_count++;
    }

    public function isEmpty()
    {
        return $this->_count == 0;
    }

    public function prev()
    {
        if ($this->current() && $prev = $this->current()->getPrev()) {
            $this->setCurrent($prev);
        }

        return $prev;
    }

    public function next()
    {
        if ($this->current() && $next = $this->current()->getNext()) {
            $this->setCurrent($next);
        }

        return $next;
    }

    public function setCurrent($current)
    {
        $this->_current = $current;
    }

    public function current()
    {
        return $this->_current;
    }

    public function shift()
    {
        if ($this->isEmpty()) {
            return false; //TODO EXCEPTION
        }

        $element = $this->_first;
        if ($this->_first = $this->_first->getNext()) {
            $this->_first->setPrev(false);
            $this->setCurrent($this->_first);
            $this->_count--;
        } else {
            $this->_freeList();
        }

        return $element;
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            return false; //TODO EXCEPTION
        }

        $element = $this->_last;

        if ($this->_last = $this->_last->getPrev()) {
            $this->_last->setNext(false);
            $this->setCurrent($this->_first);
            $this->_count--;
        } else {
            $this->_freeList();
        }

        return $element;
    }

    protected function _freeList()
    {
        $this->_count = 0;
        $this->_current = false;
        $this->_last = false;
        $this->_first = false;
    }
}

//$list = new LinkedList();
//
//for ($i = 0; $i < 10; $i++) {
//    $list->push(new Element($i));
//}
//
//while ($list->prev()) {
//    echo $list->current()->getData() . '</br>';
//}
//
//while ($list->next()) {
//    echo $list->current()->getData() . '</br>';
//}



$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$array = array();
for($i=0; $i<100; $i++) {
    array_push($array, $i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100']['procedure'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$array = array();
for($i=0; $i<1000; $i++) {
    array_push($array, $i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['1000']['procedure'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$array = array();
for($i=0; $i<10000; $i++) {
    array_push($array, $i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['10000']['procedure'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$array = array();
for($i=0; $i<100000; $i++) {
    array_push($array, $i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100000']['procedure'] = array('memory' => $resultMemory, 'time' => $resultTime);


$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new LinkedList();
for($i=0; $i<100; $i++) {
    $list->push(new Element($i));
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100']['oop'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new LinkedList();
for($i=0; $i<1000; $i++) {
    $list->push(new Element($i));
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['1000']['oop'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new LinkedList();
for($i=0; $i<10000; $i++) {
    $list->push(new Element($i));
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['10000']['oop'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new LinkedList();
for($i=0; $i<100000; $i++) {
    $list->push(new Element($i));
}

$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100000']['oop'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i=0; $i<100; $i++) {
    $list->push($i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100']['spl'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i=0; $i<1000; $i++) {
    $list->push($i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['1000']['spl'] = array('memory' => $resultMemory, 'time' => $resultTime);

$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i=0; $i<10000; $i++) {
    $list->push($i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['10000']['spl'] = array('memory' => $resultMemory, 'time' => $resultTime);


$startTime = microtime(true);
$memoryUsage = memory_get_usage();
$list = new SplDoublyLinkedList();
for($i=0; $i<100000; $i++) {
    $list->push($i);
}
$resultMemory = abs(memory_get_usage() - $memoryUsage);
$resultTime = microtime(true) - $startTime;
$data['100000']['spl'] = array('memory' => $resultMemory, 'time' => $resultTime);




include('test_view.php');