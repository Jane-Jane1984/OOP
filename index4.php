<?php


use public_class\News;
use public_class\Announcements;
use public_class\Articles;

//function auto_load($class) //функция созданная для автозагрузки
//{
//    $str = str_replace('\\', '/', $class);  //эта строка кода нужна для пространств имён, чтобы заменить слеши, обратный слеш экранируем
//    //echo $str . '.php<br>';
//    require_once $str . '.php';
//}
//spl_autoload_register('auto_load');  //функция автозагрузки

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



$news = new News('Title News', 'Title text', date("d.m.Y"));
//echo $news->show();
//echo '<br>';
//echo '<br>';
$announce = new Announcements('Title Announcements', 'Announcements text', date('d.m.Y', strtotime('+1 month')));
//echo $announce->show();
//echo '<br>';
//echo '<br>';
$article = new Articles('Title Article', 'Text article', 'A. Author');
//echo $article->show();

$arrText = [
  $news,
  $announce,
  $article
];

foreach ($arrText as $text){
    echo $text->show();
    echo '<br>';
}