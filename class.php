<?php
//Класс как заготовка
class User
{
    //public $name;
    private $name;
    private $age;

//    public function __construct($n, $a)
//    {
//        $this->age = $a;
//        $this->name = $n;
//    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age > 18 && $age < 60){
            $this->age = $age;
        }

    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

$man = new User;

//1//$man->name = 'Poll';
//$man->age = '18';
var_dump($man);

$man->setAge(25);
$man->setName('Poll');
echo '<br>';
echo 'My name is ' . $man->getName() . " age " . $man->getAge() . ' years old';
