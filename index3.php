<?php

require_once 'Menu.php';
require_once 'MenuItem.php';

$menu = new Menu();
$menuItem->AddMenuItem('Home', 'index3.php')->AddMenuItem('About', 'index3.php')->AddMenuItem('Photo', 'index3.php')->AddMenuItem('Contact Us', 'index3.php')->AddMenuItem('Login','index3.php');
echo $menuItem->PrintMenu(90, 30, 'gray', 'red');