<?php


trait Hello
{
    public function __construct()
    {
        echo 'Hello, trait';
    }

    public function run()
    {
        echo '<br>' . $this->show() . ' this is run';
    }
}