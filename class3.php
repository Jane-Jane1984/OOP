<?php

class Helper
{
    /**
     * массив чисел
     * @var array
     */
    private $sumAr = [];


    /**
     * возвращает сумму чисел в sumAr
     * @return float|int
     */
    public function getSum()
    {
        return array_sum($this->sumAr);
    }

    /**
     * добавляет значения к масиву sumAr
     * @param $s
     * @return $this
     */
    public function setSum($s)
    {
        //отработает только если пришло число
        if(is_int($s)){
            $this->sumAr[] = $s;
        }
        //возвращает ссылку на свой объект . позволяет создать цепочку методов для вывода
        return $this;
    }


}

$helper = new Helper();

// echo $helper->setSum(1)->setSum(2)->setSum(3)->getSum(); //1

$helper->setSum(1)->setSum(2)->setSum(3); //2
echo $helper->getSum();


