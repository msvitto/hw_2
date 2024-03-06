<?php
include 'Human.php';
class HumanService
{
    public static function reverseHuman(Human $human):Human
    {
        $human->sex = 'female';
        $human->name= 'Service';

        return $human;
    }
}
$petia = new Human(50, 'male', 'Petia');
HumanService::reverseHuman($ann);
print_r($ann);
