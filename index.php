<?php
/* не используем так подключение вручную, так как установлен composer
 require_once 'classes/products.php';
//require_once 'classes/notebook.php';
//require_once 'classes/Book.php';*/

use app\Book;
use app\Notebook;

//загрусчик composer
require_once __DIR__.'/vendor/autoload.php';

//подключение через ф-цию автозагрузчика
//spl_autoload_register(function ($class){
//   $file = __DIR__."/classes/{$class}.php";
//   if(file_exists($file)){
//       require_once ($file);
//   }
//});

//ф-ция для красивого вывода объектов или массиовов
function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new Book('Set', 133, 1000);
$notebook = new Notebook('hp', 200, 'intel');

echo $notebook->getProduct();
echo $book->getProduct();

//подключили стороннюю библиотеку через composer и создали объект
$mail = new \PHPMailer\PHPMailer\PHPMailer();
//debug($mail);
echo '<br>';

//singleton не даст создать $a2. будет один и тот же объект
$a1 = \app\A::getInstance();
$a2 = \app\A::getInstance();
var_dump($a1);
echo '<br>';
var_dump($a2);