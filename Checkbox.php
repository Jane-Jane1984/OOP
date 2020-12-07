<?php


class Checkbox extends Input
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

    public function setCheckedState()
    {
        $this->isChecked = true;
    }

    public function convertToHtml()
    {

        $str = '';
        $str .= '<input type = "checkbox" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px;"/> ';

        return $str;
    }



    /**<input type = "checkbox" name = "type1" value = "low">Меньше 18<br>
    <input type = "checkbox" name = "type2" value = "2old">От 18 до 35<br>
    <input type = "checkbox" name = "type3" value = "high">Больше 35<br>
    <input type = "checkbox" name = "type4" value = "busy">Женат /-а<br>
    <input type = "checkbox" name = "type5" value = "cat">Есть кошка<br>*/
}
//Создать класс Checkbox, который будет создавать
//	checkbox, унаследовать класс Input. Добавить к классу
//	Radio private-поле isChecked, метод getCheckedState(),
//	который не принимает ничего в качестве параметра и
//	возвращает значение поля isChecked, метод setCheckedState(), записывающий в поле isChecked значение "true",
//	и конструктор, который принимает _background, _width,
//	_height, _name, _value, _isChecked в качестве параметров
//	и вызывает соответствующие методы для заполнения
//параметров в поле.