<?php

class Parents
{
    //public $prop = 'parents';
    public $prop; //null
    protected $x;
    protected $y;

    public function __construct($pr, $x, $y)
    {
        if(is_null($this->prop)) { //свойство перезапишется, если оно равно пустот
            $this->prop = $pr;
            $this->x = $x;
            $this->y = $y;
        }
    }

    public function show()
    {
        return 'Hello';
    }
}

class Child extends Parents
{
    public $z;
    //protected $p = 0;
    public function __construct($pr, $x, $y, $z)
    {
        parent::__construct($pr, $x, $y);  //обращение к методу конструктора родителя
        $this->z = $z;
    }

    public function getProp()
    {
        return $this->prop;

    }
    public function getParentShow() //щздали метод потомка, который обращается к методу родителя
    {
        return parent::show();
    }
}

//class Child2 extends Child //внук
//{
//    public function getP()
//    {
//        return $this->p;
//    }
//
//    public function getParentProp()
//    {
//        return "child2 - " . $this->prop;
//    }
//}

//$obj = new Parents('перезаписанное свойство');
//echo $obj->prop;


$obj2 = new Child('12345', 1, 2, 3);
//echo $obj2->getProp();

var_dump($obj2);

//echo $obj2->getParentShow();

//$obj3 = new Child2(); //внук
//echo '<br>';
//echo $obj3->getParentProp();