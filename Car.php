<?php

class Car
{
    private $color;
    private $model;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    private $type;

    public function __construct($t)
    {
        $this->type = $t;
    }

    public function getCategory()
    {
        if($this->type == 1){
            return "B";
        }elseif ($this->type == 2){
            return "C";
        }else{
            return "Uncorrected type";
        }
    }
}

$obj = new Car(2);

echo 'Права категории ' . $obj->getCategory();