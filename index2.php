<?php


require_once 'Control.php';  //усли нет автозагрузки, первым подключается класс родителя

require_once 'Input.php';
require_once 'Button.php';
require_once 'Text.php';
require_once 'Label.php';
require_once 'Select.php';

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

