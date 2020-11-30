<?php


class Product
{

    protected $name;
    //private $price;
    protected $description;
    protected $brand;

    public function __construct($nameOfProduct, $descriptionOfProduct, $brandOfProduct)
    {
        $this->name = $nameOfProduct;
        //$this->price = $priceOfProduct;
        $this->description = $descriptionOfProduct;
        $this->brand = $brandOfProduct;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    public function getProduct()
    {
        return $this->getName() . $this->getDescription() . $this->getBrand();
    }
}

class Phone extends Product
{
    protected $cpu;
    protected $ram;
    protected $countSim;
    protected $hdd;
    protected $os;

    public function __construct($nameOfProduct, $descriptionOfProduct, $brandOfProduct, $cpuP, $ramP, $countSimP, $hddP, $osP)
    {
        parent::__construct($nameOfProduct, $descriptionOfProduct, $brandOfProduct);
        $this->cpu = $cpuP;
        $this->ram = $ramP;
        $this->countSim = $countSimP;
        $this->hdd = $hddP;
        $this->os = $osP;
    }

    /**
     * @return mixed
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @return mixed
     */
    public function getCountSim()
    {
        return $this->countSim;
    }

    /**
     * @return mixed
     */
    public function getHdd()
    {
        return $this->hdd;
    }

    /**
     * @return mixed
     */
    public function getOs()
    {
        return $this->os;
    }

    public function getPhoneProduct()
    {
        return parent::getProduct() . $this->getCpu() . $this->getRam() . $this->getCountSim() . $this->getHdd() . $this->getOs();
    }

}

class Monitor extends Product
{
    protected $model;
    protected $diagonal;
    protected $frequency;
    protected $ports;

    public function __construct($nameOfProduct, $descriptionOfProduct, $brandOfProduct, $modelP, $diagonalP, $frequencyP, $portsP)
    {
        parent::__construct($nameOfProduct, $descriptionOfProduct, $brandOfProduct);
        $this->model = $modelP;
        $this->diagonal = $diagonalP;
        $this->frequency = $frequencyP;
        $this->ports = $portsP;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getDiagonal()
    {
        return $this->diagonal;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @return mixed
     */
    public function getPorts()
    {
        return $this->ports;
    }

    public function getMonitorProduct()
    {
        return parent::getProduct() . $this->getModel() . $this->getDiagonal() . $this->getFrequency() . $this->getPorts();
    }

}


$phone1 = new Phone('Phone1', 'good product', 'Sumsum', 'fire', 'no', 2, 'yes', 'PUP');
$phone2 = new Phone('Phone2', 'good product too', 'Top', 'Rocket', 'no', 2, 'yes', 'PUP');
$phone1->getPhoneProduct();
$phone2->getPhoneProduct();


$monitor1 = new Monitor('Monitor1', 'big monitor', 'TOP', '345W', '78', 'no', '5');
$monitor1->getMonitorProduct();

$arrProduct = [
    $phone1,
    $phone2,
    $monitor1
];

//echo $arrPh;
echo '<pre>';
print_r($arrProduct);
echo '</pre>';


