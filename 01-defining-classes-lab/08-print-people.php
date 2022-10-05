<?php

class Person
{
    public $name;
    public $age;
    public $occupation;

    public function __construct($name, $age, $occupation)
    {
        $this->set_name($name);
        $this->set_age($age);
        $this->set_occupation($occupation);
    }

    /**
     * @return mixed
     */
    public function get_name()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function set_name($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function get_age()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function set_age($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function get_occupation()
    {
        return $this->occupation;
    }

    /**
     * @param mixed $occupation
     */
    public function set_occupation($occupation): void
    {
        $this->occupation = $occupation;
    }

    public function __toString(): string
    {
        return "{$this->get_name()} - age: {$this->get_age()}, occupation: {$this->get_occupation()}";
    }
}

$input = readline();

$person_arr = [];
while ($input !== 'END') {
    [$name, $age, $occupation] = explode(' ', $input);;

    $person_arr[] = new Person($name, intval($age), $occupation);

    $input = readline();
}

usort($person_arr, function (Person $p1, Person $p2) use ($person_arr) {
    return $p1->get_age() <=> $p2->get_age();
});

/** @var Person $person */
foreach ($person_arr as $person) {
    echo $person . PHP_EOL;
}