<?php

class Student
{
    private $name;
    private $course = 1;

//    public function __construct($name, $course)
//    {
//        $this->name = $name;
//        $this->course = $course;
//    }
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param int $course
     */
    public function setCourse($course)
    {
        if($this->isCorrectCourse($course)){
            $this->course = $course;
        }
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    private function isCorrectCourse($course)
    {
        if($course >= 1 && $course <= 5){
            return true;
        }else{
            return false;
        }
    }

}

$std = new Student();
$std2 = new Student();
$std->setName('Petr');
$std->setCourse(3);
$std2->setName('Ivan');
$std2->setCourse(9);

$arr = [
    $std,
    $std2
];

//echo '<pre>';
//var_dump($arr);
//echo '</pre>';

foreach($arr as $ar){
    echo 'name: ' . $ar->getName() . ' course: ' . $ar->getCourse() . '<br>';
}