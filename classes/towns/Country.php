<?php

namespace classes\towns;
session_start();
session_destroy();
class Country
{
    private $listTown = [];

    public function __construct()
    {
        if(!empty($_SESSION['country'])){
            foreach ($_SESSION['country'] as $item){
                $this->listTown[] = unserialize($_SESSION[$item]);
            }
        }
    }

    public function addTown(Town $town)
    {
        $this->listTown[] = $town;
        $_SESSION['country'][] = serialize($town);
    }

    public function getCountryList()
    {
        if(empty($listTown)){
            echo '<div>';
                foreach ($this->listTown as $country){
                    echo '<p> Город: ' . $country->name . '.</p>';
                    echo '<p> Был основан в ' . $country->foundation . ' году.</p>';
                    echo '<p> Численность населения ' . $country->population . ' человек.</p>';
                }
            echo '</div>';
        }else{
            echo "<div>Города пока не добавлены.</div>";
        }
    }



}


//Конструктор класса Country должен проверить содержится ли что-либо в массиве $_SESSION['country']
//	если это массив, то нужно перебрать его в цикле и используя функцию unserialize() восстановить объекты
//	и записать их в listTown

//Реализовать метод добавления города addTown. Параметром передать объект класса Town (метод не должен
//	принимать что-то другое) переданный объект записать в конец массива listTown а так же сериализованный объект
//	записать в конец $_SESSION['country'].

//Реализовать метод getCountryList. Метод должен проверить содержится ли что-либо в массиве listTown
//	если да то вывести используя html-разметку (можно по минимуму) ели нет, то выдать сообщение что города пока не добавлены