<?php

require_once 'Control.php';  //усли нет автозагрузки, первым подключается класс родителя

require_once 'Input.php';
require_once 'Button.php';
require_once 'Text.php';
require_once 'Label.php';

require_once 'Point.php';
require_once 'CircleC.php';
require_once 'RectangleC.php';

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


$object = new Button('red', 100, 30, 'submit', 'Send', true);
echo $object->convertToHtml();


