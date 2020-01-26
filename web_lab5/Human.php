<?php


class Human
{
    private $age;
    private $sex;

    public function __construct($age, $sex)
    {
        $this->age = $age;
        $this->sex = $sex;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }

    public function showAge()
    {
        echo "Возраст: " . $this->age . "<br>";
    }

    public function showSex()
    {
        echo "Пол: " . $this->sex . "<br>";
    }

    public function printObj(){}
}