<?php


class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 20)
    {
        $this->stack = array();
        $this->limit = $limit;
    }

    function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new \http\Exception\RuntimeException('Stack is full!');
        }
    }

    function pop()
    {
        if ($this->isEmpty()) {
            throw new \http\Exception\RuntimeException('stack is empty');
        }else{
            return array_shift($this->stack);
        }
    }

    public function peek(){
        return array_filter($this->stack);
    }
    public function top(){
        return current($this->stack);
    }

    public function isEmpty(){
        return empty($this->stack);
    }
}