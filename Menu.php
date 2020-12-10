<?php


class Menu
{
    private $listItems = [];

    /**
     * @return array
     */
    public function getListItems()
    {
        return $this->listItems;
    }

    /**
     * @param array $listItems
     */
    public function setListItems($listItems)
    {
        $this->listItems = $listItems;
    }

    public function PrintMenu($width, $height, $backgroundColor, $color)
    {
       $style = '';
       $style = "'style = width: ' . $width . 'px; height: ' . $height . 'px; background-color: ' . $backgroundColor . '; color: ' . $color;";
       return $style;
    }

    public function AddMenuItem($name, $url)
    {
        $listItem = new MenuItem($name, $url);
        $this->listItems[] = $listItem;
        return $this;
    }
}

/**
 *  public function convertToHtml()
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
 */