<?php
$time = microtime();
$memory = memory_get_usage();
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

        if (isset($_SESSION['current'])) {
            $this->moveToCurrent($_SESSION['current']);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $action = array_intersect($this->_actions, array_keys($_POST))) {
            $this->_doAction(reset($action));
        } else {
            echo "<h1>Please select some action!</h1>";
        }
    }

    public function moveToCurrent($current)
    {
        $found = false;
        $this->getList()->setIteratorMode(SplDoublyLinkedList::IT_MODE_KEEP);
        $this->rewind();
        while ($value = $this->current()) {
            if ($value == $current) {
                $found = true;
                break;
            }

            $this->next();
        }

        $this->setCurrent($found ? $current : null);
    }

    public function setCurrent($current = null)
    {
        if (!is_null($current)) {
            $current = $current;
        } elseif ($this->current()) {
            $current = $this->current();
        } else {
            echo "<h1>You pointer is out from list, you can start from begining</h1>";
            $current = null;
        }

        $this->_currentElement = $_SESSION['current'] = $current;

    }

    public function getCurrent()
    {
        return $this->_currentElement;
    }

    public function _doAction($action)
    {
        switch ($action) {
            case 'move_right':
                $this->move($action);
                break;
            case 'move_left' :
                $this->move($action);
                break;
            case 'lifo_delete':
                $this->delete($action);
                break;
            case 'fifo_delete' :
                $this->delete($action);
                break;
            case
            'fifo_add' :
                $this->getList()->unshift(rand(1, 1000));
                break;
            case'lifo_add' :
                $this->getList()->push(rand(1, 1000));
                break;
        }
    }

    public function delete($action)
    {
        ($action == 'lifo_delete') ? $this->getList()->pop() : $this->getList()->shift();
        $this->setCurrent($this->bottom());
    }

    public function __destruct()
    {
        $_SESSION['stack'] = $this->getList()->serialize();
    }

    public function bottom()
    {
        return !$this->isEmpty() ? $this->getList()->bottom() : null;
    }

    public function move($action)
    {
        if ($action == 'move_right') {
            is_null($this->getCurrent()) ? $this->rewind() : $this->next();
        } else {
            $this->prev();
        }

        $this->setCurrent();
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

$obj->getList()->setIteratorMode(SplDoublyLinkedList::IT_MODE_FIFO);
$obj->rewind();

include_once 'view.php';
