<?php


class Text extends Input
{
    private $placeholder;

    public function __construct($background, $width, $height, $name, $value, $placeholder)
    {
        $this->setBackground($background);
        $this->setHeight($height);
        $this->setWidth($width);
        $this->setName($name);
        $this->setValue($value);
        $this->placeholder = $placeholder;

    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
}

/**
 * Создать класс Text , который будет строить на странице
textbox, унаследовать класс Input. Добавить к классу
Text private-поле placeholder, метод getPlaceholder(),
который не принимает в качестве параметров ничего и возвращает значение поля placeholder, метод
setPlaceholder(), который принимает в качестве параметра строку и записывает ее в поле placeholder, и
конструктор, принимающий в качестве параметров
_background, _width, _height, _name, _value, _placeholder
и вызывает соответствующие методы для заполнения
параметров поля
 */