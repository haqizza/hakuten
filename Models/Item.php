<?php
  class Item{
    public $id;
    public $image;
    public $name;
    public $stock;
    public $sold;
    public $price;
    public $tag;
    public $details;

    function set_id($id){
      $this->id = $id;
    }
    function set_name($name){
      $this->$name = $name;
    }
    function set_stock($id){
      $this->$id;
    }
    function set_sold($id){
      $this->$id;
    }
  }
?>