<?php
//для PRODUCT
session_start();


//require_once 'Control.php';  //усли нет автозагрузки, первым подключается класс родителя, с автозагрузкой эти подключения не нужны, кроме use
//
//require_once 'Input.php';
//require_once 'Button.php';
//require_once 'Text.php';
//require_once 'Label.php';
//
//require_once 'Point.php';
//require_once 'PointInterface.php';
//require_once 'CircleC.php';
//require_once 'RectangleC.php';
//
//require_once 'app/User.php';
//require_once 'User.php';

//use app\lib\Library;

//ФУНКЦИЯ АВТОЗАГРУЗКИ

function auto_load($class) //функция созданная для автозагрузки
{
    $str = $_SERVER['DOCUMENT_ROOT'] . '/';
    $str .= str_replace('\\', '/', $class);  //эта строка кода нужна для пространств имён, чтобы заменить слеши, обратный слеш экранируем
    $str .= '.php';
    //echo $str;
    if(is_file($str)) {
        require_once $str;
    }
}

spl_autoload_register('auto_load');  //функция автозагрузки

//$user = new User();
//$library = new app\lib\library();
//$circle = new CircleC(3, 6, 9);

//конец функции автозагрузки

//use app\User; //объявляем, что будем использовать это пространство имён. Подходит , если используется в этом файле только одно пространство имени.
//$user = new User(); //объявляем тогда без имени пространства

/**
 * @param $object
 * @return string
 * формирует тег input на рснове данных объекта
 *
 */
//function convertToHTML($object)
//{
//    $str = '';
//
//    if($object instanceof Text){
//        $str .= '<label for="'.$object->getName().'"></label>';
//    }
//
//    $str .= '<input ';
//    if($object instanceof Button){
//        $str .= 'type = "submit" ';
//    }elseif($object instanceof Text){
//        $str .= 'type = "text" ';
//        $str .= 'placeholder="'.$object->getPlaceholder().'" ';
//    }
//    $str .= 'name ="' . $object->getName().'" ';
//    $str .= 'value ="' . $object->getValue().'" ';
//    $str .= 'style="background: '.$object->getBackground().'; width: '.$object->getWidth().'px; height: '.$object->getHeight().'px" ';
//    $str .= ' />';
//    return $str;
//}
//
//$control = new Control();
//$button = new Button('red', 70, 20, 'button', 'Ok', true);
//$text = new Text('', 140, 50, 'text', '', 'Введите имя');
//
//echo convertToHTML($button);
//echo '<br>';
//echo '<br>';
//echo convertToHTML($text);


//echo '<pre>';
//var_dump(convertToHTML($button));
//echo '</pre>';


//АБСТРАКЦИЯ
//$arItems = [];
//
//$arItems[] = new CircleC(2, 4, 50);
//$arItems[] = new RectangleC(2, 4, 100, 50);
//
//$total = 0;
//
//foreach ($arItems as $arItem) {
//    $total += $arItem->area();
//
//}
//
//echo $total;


//$object = new Button('red', 100, 30, 'submit', 'Send', true);
//echo $object->convertToHtml();

//ИНТЕРФЕЙС

//$c = new Circle(2,4,10);
//echo $c->area();

//пространство имён
//$user = new User();
//echo '<br>';
//(new app\User());


//TRAIT
//$obj = new Example();
//$obj->run();
//echo $obj;

//PRODUCT

//$prod1 = new \classes\cart\Product('apple', 100, 1);
//$prod2 = new \classes\cart\Product('pine', 300, 6);
//$prod3 = new \classes\cart\Product('tomato', 450, 2);

//$cart = new \classes\cart\Cart();
////$cart->addToCart($prod1);
////$cart->addToCart($prod2);
////$cart->addToCart($prod3);
//
//$cart->getCart();

//TOWNS

$town1 = new \classes\towns\Town('Минск', 1067, 2018281);
$town2 = new \classes\towns\Town('Хабаровск', 1625, 8405837);
$town3 = new \classes\towns\Town('Нью-Йорк', 1880,  616372);
$town4 = new \classes\towns\Town('Город', 1000, 20000);

$country = new \classes\towns\Country();
$country->addTown($town1);
$country->addTown($town2);
$country->addTown($town3);
$country->addTown($town4);

$country->getCountryList();



