<?php


class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age)
    {
        $this->name = $name;

        if($age > 17 && $age < 61){
            return $this->age = $age;
        }else{
            echo "Error, wrong age!";
            die();
        }
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$emp1 = new Employee('Ivanov Ivan', '35');
$emp1->setSalary(900);
$salary1 = $emp1->getSalary();

echo '<pre>';
print_r($emp1);
echo '</pre>';

$emp2 = new Employee('Zajceva Katya', '25');
$emp2->setSalary(650);
$salary2 = $emp2->getSalary();

echo '<pre>';
print_r($emp2);
echo '</pre>';

$arrEmpSal = [
    $salary1,
    $salary2

];
//var_dump($salary2);

$SalarySum = array_sum($arrEmpSal);

echo '<pre>';
print_r($SalarySum);
echo '</pre>';

