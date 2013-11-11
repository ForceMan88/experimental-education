<?php
ini_set('display_errors', 1);
class TestDataStructure
{

    protected $_currentElement;

    /** @var $_list SplDoublyLinkedList */
    protected $_list;

    protected $_actions = array('fifo_add', 'fifo_delete', 'lifo_add', 'lifo_delete', 'move_left', 'move_right');

    public function __construct()
    {
        session_start();
        $this->_init();
    }


    private function _init()
    {
        $this->_list = new SplDoublyLinkedList();

        if (isset($_SESSION['stack'])) {
            $this->getList()->unserialize($_SESSION['stack']);
        }

        $this->getList()->rewind();

        if (isset($_SESSION['current'])) {
            $this->setCurrent($_SESSION['current']);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $action = array_intersect($this->_actions, array_keys($_POST))) {
            $this->_doAction(reset($action));
        } else {
            echo "<h1>Please select some action!</h1>";
        }

    }

    public function setCurrent($current)
    {
        $this->_currentElement = $_SESSION['current'] = $current;
    }

    public function getCurrent()
    {
        return $this->_currentElement;
    }

    public function _doAction($action)
    {
        switch ($action) {
            case 'move_left' :
                $this->movePrev($action);
                break;
            case 'move_right' :
                $this->moveNext($action);
                break;
            case
                'fifo_add' :
                $this->getList()->unshift(rand(0, 100));
                break;
            case 'fifo_delete' :
                $this->fifoDelete();
                break;
            case'lifo_add' :
                $this->getList()->push(rand(0, 100));
                break;
            case'lifo_delete' :
                $this->lifoDelete();
                break;
        }
    }

    public function fifoDelete()
    {
        if ($this->isEmpty()) {
            echo "<h1>Please add element before delete!</h1>";
            return;
        }
        $this->getList()->shift();
        $this->setCurrent($this->bottom());
    }

    public function lifoDelete()
    {
        if ($this->isEmpty()) {
            echo "<h1>Please add element before delete!</h1>";
            return;
        }
        $this->getList()->pop();
        $this->setCurrent($this->bottom());
    }


    public function __destruct()
    {
        $_SESSION['stack'] = $this->getList()->serialize();
    }

    public function bottom()
    {
        return $this->getList()->bottom();
    }


    public function moveNext()
    {
        $this->getList()->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);

        if ($this->isEmpty()) {
            echo "<h1>Please add element before move!</h1>";
            return;
        }

        if (is_null($this->getCurrent())) {
            $this->rewind();
            $this->setCurrent($this->current());
            return;
        }


        foreach ($this->getList() as $value) {
            if ($value == $this->getCurrent()) {
                $this->next();
                if ($value = $this->current()) {
                    $this->setCurrent($value);
                } else {
                    echo "<h1>You reasched to the end of the listl!</h1>";
                    $this->setCurrent($this->getList()->bottom());
                }
                break;
            }
            $this->next();
        }
    }
    public function movePrev()
    {
        $this->getList()->setIteratorMode(SplDoublyLinkedList::IT_MODE_KEEP);
        if ($this->isEmpty()) {
            echo "<h1>Please add element before move!</h1>";
            return;
        }

        if (is_null($this->getCurrent())) {
            $this->rewind();
            $this->setCurrent($this->current());
            return;
        }

        foreach ($this->getList() as $value) {
            if ($value == $this->getCurrent()) {
                $this->prev();
                if ($value = $this->current()) {
                    $this->setCurrent($value);
                } else {
                    echo "<h1>You reasched to the end of the listl!</h1>";
                    $this->setCurrent($this->getList()->bottom());
                }
                break;
            }
            $this->prev();
        }
    }

    public function getList()
    {
        return $this->_list;
    }

    public function isEmpty()
    {
        return $this->getList()->isEmpty();
    }

    public function next()
    {
        $this->getList()->next();
    }

    public function prev()
    {
        $this->getList()->prev();
    }

    public function current()
    {
        return $this->getList()->current();
    }

    public function rewind()
    {
        return $this->getList()->rewind();
    }

}

$obj = new TestDataStructure();


include_once("view.php");



