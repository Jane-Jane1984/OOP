<?php


class Radio extends Input
{
    private $isChecked;

    public function __construct($background, $width, $height, $name, $value, $isChecked)
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setValue($value);
        $this->setName($name);
        $this->isChecked = $isChecked;
    }

    public function getCheckedState()
    {
        return $this->isChecked;

    }

    public function setCheckedState($isChecked)
    {
        $this->isChecked = $isChecked;
    }

    /**
     * @return string
     * Мужчина <input  type = "radio" name = "sex" value =  "male" checked>
     *Женщина <input type = "radio" name = "sex" value =  "female"> <br> <br>
     */

    public function convertToHtml()
    {

        $str = '';
        $str .= '<input type = "radio" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px;"/> ';

        return $str;
    }

}

//Создать класс Radio, который будет создавать radiobutton, унаследовать класс Input. Добавить к классу Radio
//	private-поле isChecked, метод getCheckedState(), который
//	не принимает ничего в качестве параметра и возвращает значение поля isChecked, setCheckedState(),
//записывающий в поле isChecked значение "true", и конструктор,
//	принимает _background, _width, _height, _name, _value,
//	_isChecked в качестве параметров и вызывает соответствующие методы для заполнения параметров в поле.