<?php
/**
 * Created by PhpStorm.
 * User: USER001
 * Date: 11.05.2020
 * Time: 14:40
 */
namespace app;
use wfm\Products;

class Book extends Products
{
    public $numPage;

    public function __construct($name, $price, $numPage)
    {
        parent::__construct($name, $price);
        $this->numPage = $numPage;
    }

    public function getProduct()
    {
        $about = parent::getProduct();
        $about .= "
            number of page: {$this->numPage}
        ";
        return $about;
    }

    public function getNumPage()
    {
        return $this->numPage;
    }

}