<?php

class Country
{
    private $arCountry = [];

    public function setCountry($c)
    {
        $this->arCountry[] = $c;
    }

    /**
     * @return array
     */
    public function getArCountry()
    {
        return $this->arCountry;
    }
}

$country = new Country();

echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';

$country->setCountry('Belarus');
echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';

$country->setCountry('USA');
echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';