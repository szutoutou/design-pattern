<?php

/**
 * Created by PhpStorm.
 * User: liujiaxing
 * Date: 2020-05-23
 * Time: 16:08
 */
class Cat
{

    function __construct()
    {
        echo "I am Cat class\n";
    }
}

class Dog
{
    function __construct()
    {
        echo "I am Dog class\n";
    }
}

class AnimalFactory
{
    public static function createAnimal($name)
    {
        switch ($name) {
            case 'cat':
                return new Cat();
                break;
            case 'dog':
                return new Dog();
                break;
            default:
                break;
        }
    }
}

$cat = AnimalFactory::createAnimal('cat');
$dog = AnimalFactory::createAnimal('dog');
