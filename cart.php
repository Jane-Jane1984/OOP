<?php

session_start();

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



$cart = new \classes\cart\Cart();
$cart->getCart();