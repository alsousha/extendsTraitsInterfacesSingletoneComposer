<?php

//обеспечивает только одно создание объекта
namespace wfm\traits;

trait TSingleton
{
    private static $instanse;

    private function __construct()
    {

    }

    //только ф-ция публична, кот проверяет: если еще не б создан объект - создает его
    //index.php   $a1 = \app\A::getInstance(); $a2 = \app\A::getInstance(); //вернет один и тот же объект
    public static function getInstance()
    {
        if(self::$instanse === null){
            self::$instanse = new self();
        }
        return self::$instanse;
    }

}