<?php


namespace App\classes;


abstract class ExampleOne
{
    public $hello = "Arif";
    protected $helloOne= "Tushar";
    private $helloTwo = "Alamin";

    public function helloFour()
    {
        echo 'hello fout';
    }
    abstract public function helloFive();

}