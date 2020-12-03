<?php


class Select extends Control
{
    private $arItem = [];
    private $name;

    public function __construct($background, $width, $height, $name, $items = [])
    {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->name = $name;
        $this->arItem = $items;
    }

    public function convertToHtml()
    {
        
        $str = '';
        $str .= '<select ';
        $str .= 'name="' . $this->name . '" ';
        $str .= 'style="background: ' . $this->getBackground() . '; height: ' . $this->getHeight() . 'px; width: ' . $this->getWidth() . 'px;">';

        foreach ($this->arItem as $item) {
            $str .= '<option>'.$item.'</option>';
        }

        $str
            .= '</select>';
        return $str;
    }

}