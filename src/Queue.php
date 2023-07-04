<?php
class Queue{
    protected $items = [];
    public function push(string $item):void{
        $this->items[]=$item;
    }
    public function pop():?string{
        $item= array_shift($this->items);
        var_dump($item);
        return $item;
    }
    public function getCount():int{
        return count($this->items);
    }
}