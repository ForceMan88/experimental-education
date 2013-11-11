<?php
ini_set('display_errors', 1);
class TestDataStructure extends SplDoublyLinkedList implements Iterator, ArrayAccess, Countable
{

    protected $_currentElement;

    protected $_actions = array('fifo_add', 'fifo_delete', 'lifo_add', 'lifo_delete', 'move_left', 'move_right');

    public function __construct()
    {
        session_start();
        $this->_init();
    }

    private function _init()
    {
        if (isset($_SESSION['stack'])) {
            $this->unserialize($_SESSION['stack']);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $action = array_intersect($this->_actions, array_keys($_POST))) {
            $this->_doAction(reset($action));
        } else {
            echo "<h1>Please select some action!</h1>";
        }

        if (isset($_SESSION['current']) && $this->offsetExists($_SESSION['current'])) {
            $this->setCurrent($this->offsetGet($_SESSION['current']));
        }

    }

    public function setCurrent($current)
    {
        $this->_currentElement = $current;
    }

    public function getCurrent()
    {
        return $this->_currentElement;
    }

    protected function _doAction($action)
    {
        switch ($action) {
            case 'move_left' :
                $this->move($action);
                break;
            case 'move_right' :
                $this->move($action);
                break;
            case
            'fifo_add' :
                $this->unshift(rand(0, 100));
                break;
            case 'fifo_delete' :
                $this->fifoDelete();
                break;
            case'lifo_add' :
                $this->push(rand(0, 100));
                break;
            case'lifo_delete' :
                $this->lifoDelete();
                break;
        }
    }

    public function fifoDelete()
    {
        if ($this->count()) {
            $this->shift();
            $this->setCurrent($this->bottom());
        } else {
            echo "<h1>Please add element before delete!</h1>";
        }
    }

    public function lifoDelete()
    {
        if ($this->count()) {
            $this->pop();
            $this->setCurrent($this->top());
        } else {
            echo "<h1>Please add element before delete!</h1>";
        }
    }


    public function __destruct()
    {
        $_SESSION['stack'] = $this->serialize();
        $_SESSION['current'] = (!is_null($this->getCurrent())) ? $this->getCurrent() : $this->current();
    }

    public function move($action)
    {
        if ($this->count()) {
          ($action == 'move_left') ? $this->prev() : $this->next();
          $this->setCurrent($this->current());
        } else {
            echo "<h1>Please add element before move!</h1>";
        }


    }
}

$obj = new TestDataStructure();
include_once("view.php");



