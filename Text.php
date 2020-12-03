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

    public function convertToHtml()
    {

        $str = '';
        $str .= '<input type="text" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'" ';
        $str .= 'placeholder="'.$this->getPlaceholder().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px;"/>';

        return $str;

    }

}
