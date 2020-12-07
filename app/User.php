<?php
namespace app;
//Класс как заготовка
class User
{

    private $name;
    private $age;

    public function __construct()
    {
        echo "Я нахожусь в пространстве имён app";
    }
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


