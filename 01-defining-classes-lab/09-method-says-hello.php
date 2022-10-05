<?php
class Person {
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return "$this->name says \"Hello\"!";
    }
}

$name = readline();

echo $person = new Person($name);