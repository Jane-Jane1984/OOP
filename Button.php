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

    public function convertToHtml()
    {
        $type = $this->isSubmit ? 'submit' : 'button';
        $str = '';
        $str .= '<input type="' . $type . '" ';
        $str .= 'name="' . $this->getName().'" ';
        $str .= 'value="' . $this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px; width: '.$this->getWidth().'px;"/>';

        return $str;

    }


}


