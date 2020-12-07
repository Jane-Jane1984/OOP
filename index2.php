<?php


require_once 'Control.php';  //усли нет автозагрузки, первым подключается класс родителя

require_once 'Input.php';
require_once 'Button.php';
require_once 'Text.php';
require_once 'Label.php';
require_once 'Select.php';
require_once 'Radio.php';
require_once 'Checkbox.php';

/**
 * @param $object
 * @return string
 * формирует тег input на рснове данных объекта
 *
 */

$object = new Button('red', 100, 30, 'submit', 'Send', true);
echo $object->convertToHtml();
echo '<br>';
echo '<br>';
$input = new Text('', 100, 30, 'text', '', 'Введите текст');
echo $input->convertToHtml();
echo '<br>';
echo '<br>';
$select = new Select('', 120, 20, 'sel', [1, 2, 3]);
echo $select->convertToHtml();
echo '<br>';
echo '<br>';
$radio = new Radio('', 20, 20, 'sex', 'male', false);
$radio1 = new Radio('', 20, 20, 'sex', 'female', false);
echo 'Мужчина ' . $radio->convertToHtml();
echo 'Женщина ' . $radio1->convertToHtml();
echo '<br>';
echo '<br>';
$checkbox = new Checkbox('', 15, 15, 'box1', 'Да', true);
$checkbox1 = new Checkbox('', 15, 15, 'box1', 'Нет', true);
$checkbox2 = new Checkbox('', 15, 15, 'box1', 'Не знаю', true);
echo $checkbox->convertToHtml() . 'Да' . '<br>';
echo $checkbox1->convertToHtml() . 'Нет' . '<br>';
echo $checkbox2->convertToHtml() . 'Не знаю' . '<br>';


