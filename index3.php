<?php

require_once 'Menu.php';
require_once 'MenuItem.php';

$menu = new Menu();
$menu ->AddMenuItem('Home', '#')->AddMenuItem('About', '#')->AddMenuItem('Photo', '#')->AddMenuItem('Contact Us', '#')->AddMenuItem('Login','#');
$menu ->PrintMenu(90, 30, 'gray', 'red');