<?php
namespace app; //совпадает с папкой в которой расположен класс
use wfm\interfaces\iGadget;
use wfm\Products; //чт понимал какой именно Products используется

class Notebook extends Products implements iGadget
{
    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu; //расширили родительский конструктор
    }

    public function getProduct()
    {
        $about = parent::getProduct();
        $about .= "
            cpu of notebook: {$this->cpu}
        "; //расширили родительский м-д
        return $about;
    }

    //реализация м-да интерфейса (iGadget)
    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    //свой собственный м-д
    public function getCPU()
    {
        return $this->cpu;
    }


}