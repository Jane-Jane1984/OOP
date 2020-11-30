<?php


class Button extends Input
{
    private $isSubmit;

    public function __construct($background, $width, $height, $name, $value, $isSubmit)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setValue($value);
        $this->setName($name);
        $this->isSubmit = $isSubmit;

    }


    public function getSubmitState()
    {
        return $this->isSubmit;
    }

    /**
     * @param bool $isSubmit
     */
    public function setSubmitState($isSubmit = true)
    {
        $this->isSubmit = $isSubmit;
    }
}

//Создать класс Button , который будет строить на странице button, унаследовать класс Input. Добавить к классу
//	Button private-поле isSubmit, метод getSubmitState(),
//	который не принимает в качестве параметров ничего и возвращает значение поля isSubmit, метод
//	setSubmitState(), записывающий в поле isSubmit значение"true", и конструктор, принимающий параметры
//	_background, _width, _height, _name, _value, _isSubmit
//	и вызывает соответствующие методы для заполнения
//	параметров поля.