<?php

function auto_load($class) //функция созданная для автозагрузки
{
    $str = str_replace('\\', '/', $class);  //эта строка кода нужна для пространств имён, чтобы заменить слеши, обратный слеш экранируем
    //echo $str . '.php<br>';
    require_once $str . '.php';
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
$article = new Articles('Title article', 'Text article', 'A. Author');
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