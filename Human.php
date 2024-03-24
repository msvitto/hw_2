<?php

class Human
{
    public static int $LEGS = 2;
    public static function getEyes():int
    {
        return 2;
    }
    public function __construct(public int $age, public string $sex, public string $name)
    {
    }

    public function getOld(): int
    {
        return $this->age * 2;
    }

}

//$ann = new Human(22, 'female', 'Ann');
//$dan = new Human(80, 'male', 'Dan');

//echo $ann->getOld();
echo Human::$LEGS;
echo Human::getEyes();