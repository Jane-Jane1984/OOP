<?php


class Example
{
    use Hello;  //подключаем trait Hello

    public function show()
    {
        return 'show';
    }

    public function __toString()
    {
        return 'нельзя так делать';
    }

    public function __get() //если мы обращаемся к неизвестному методу
    {
        return 'Ошибка';
    }

}