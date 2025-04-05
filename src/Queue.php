<?php

class Queue
{

    /**
     * Summary of items
     * @var array
     */
    protected $items = [];


    public function push($item){
        $this->items[] = $item;
    }

    public function getCount(){
        return count($this->items);
    }

    public function pop(){
        return array_shift($this->items);
    }
}