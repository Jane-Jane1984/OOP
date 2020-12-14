<?php


namespace classes\cart;


class Cart
{
    private $listCart = [];

    public function __construct()
    {
        if(!empty($_SESSION['cart'])){     //если массив сессии не пустой
            foreach ($_SESSION['cart'] as $item){
                $this->listCart[] = unserialize($item); //уже при создании объекта в массив listCart будут записаны данные из подмассива сессии 'cart'
            }
        }
    }

    public function addToCart(Product $product)  //указание типа аргумента - здесь нам необходим объект класса Product
    {
        $this->listCart[] = $product;
        $_SESSION['cart'][] = serialize($product); // сохраняем так же и в сессии - суперглобальный массив, v подмассиве cart. сериализуем объект, т.е. он преобразуется в строку
    }

    public function getCart()
    {
        echo '<div>';
        foreach ($this->listCart as $cart){
            echo '<p> Название: ' . $cart->name . '</p>';
            echo '<p> Цена: ' . $cart->price . '</p>';
            echo '<p> Количество: ' . $cart->quantity . '</p>';
            echo '<br><hr><br>';
        }
        echo '</div>';
    }

}