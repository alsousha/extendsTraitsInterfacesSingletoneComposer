<?php
/**
 * Created by PhpStorm.
 * User: USER001
 * Date: 11.05.2020
 * Time: 14:40
 */
namespace wfm;
use iFunc;

abstract class Products
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct()
    {
        $about = "<hr><b>About product</b><br>
            Name: {$this->name} <br>
            Price: {$this->price} <br>
        ";
        return $about;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function uu(iFunc $i){
        echo 'hi';
    }

}