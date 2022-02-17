<?php


namespace App\classes;


trait ExampleTwo
{
    public $arif = 'arif';
    protected $cr = 'Sudipto';
    private $mamun = 'Mamun';

    public function santo()
    {
        echo 'Hello Santo';
    }
    protected function maruf()
    {
        echo 'hello Maruf';
    }
    private function shila()
    {
        echo 'Hello Shila';
    }

}