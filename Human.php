<?php

class Human
{
    public function __construct(public int $age, public string $sex, public string $name)
    {
    }
}

$ann = new Human(22, 'female', 'Ann');
$dan = new Human(80, 'male', 'Dan');