<?php


class Calculate
{
    private static $r = 0;

    public static function plus($a, $b)
    {

        return $a +$b;
    }

    public static function minus($a, $b)
    {
        return $a - $b;
    }

    public static function multi($a, $b)
    {
        return $a * $b;

    }

    public static function device($a, $b)
    {
        if($b == 0){
            return "Деление на ноль запрещено";
        }else{
            return $a / $b;
        }
    }
}

$plus = new Calculate();
echo $plus->plus(4,5);
echo '<br>';

$minus = new Calculate();
echo $minus->minus(8, 3);
echo '<br>';

$multi = new Calculate();
echo $multi->multi(4,2);
echo '<br>';

$device = new Calculate();
echo $device->device(5, 1);
echo '<br>';

$device0 = new Calculate();
echo $device->device(5, 0);
echo '<br>';



