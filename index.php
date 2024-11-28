<?php

class Automobile 
{
    //Атрибуты объекта
public $color;
public $year;
public $techattib;
public $manufactures;
//Поведение объекта
public function startEngine()
{
   /*
   кусок кода завода мотора
   */ 
}
public function go()
{
   /*
   реализация езды
   */ 
}
}
//Созданим объект
$myCar = new Automobile;
//Описываем атрибуты машины
$myCar->color = "red";
$myCar->year = 2024;
$myCar->techattib = 'disel';
$myCar->manufactures = 'BMW';

//Вызываем требуемое действие
$myCar->startEngine();
$myCar->go();

//На основе класс Car можем создавать другие объекты
$myCar2 = new Automobile;
$myCar3 = new Automobile;
###Создание конструктора для объекта
class Auto 
{
    //Атрибуты объекта
public $color;
public $year;
public $techattib;
public $manufactures;

public function __construct($color,$year,$techattib,$manufactures)
{
    $this->color = $color;
    $this->year = $year;
    $this->techattib = $techattib;
    $this->manufactures = $manufactures;
}
//Поведение объекта
public function startEngine()
{
   /*
   кусок кода завода мотора
   */ 
}
public function go()
{
   /*
   реализация езды
   */ 
}
}
//Созданим объект и указываем атрибуты для этого класса Auto
$myCar = new Auto ('red','2024','electro','Mersedez');

//Вызываем требуемое действие
$myCar->startEngine();
$myCar->go();

#инкапсуляция

class Automobile_New 
{
    //Атрибуты объекта + сокрытие атрибутов от пользователей
private $color;
private $year;
private $techattib;
private $manufactures;



public function __construct($color,$year,$techattib,$manufactures)
{
    $this->color = $color;
    $this->year = $year;
    $this->techattib = $techattib;
    $this->manufactures = $manufactures;
}
//Поведение объекта
public function startEngine()
{
   /*
   кусок кода завода мотора
   */ 
}
public function go()
{
   /*
   реализация езды
   */ 
}
//Меняем цвет
public function changecolor($color)
{
$this->color = $color; 
}
//Добавляем еще функцию
public function displaycolor()
{
   return $this->color;
}

}
//Созданим объект + Описываем атрибуты машины
$myCar = new Automobile_New ('red', '2024', 'disel', 'BMW');
$myCar->changecolor('blue');
//echo $myCar->color; //не понятно поменялся ли цвет
echo $myCar->displaycolor();



//Вызываем требуемое действие
$myCar->startEngine();
$myCar->go();
############
//Наследование и Абстрактный класс

/* Наседования код
class Animal
{
   public $name;
   public $color;
*/
abstract class Animal
{
   protected $name;

public abstract function makeSound()
{
   //
}
public function move()
{
      //реализация№1
}

}

class Cat extends Animal
{
      public function makeSound()
   {
      echo 'mya-vv';
   }//реализация№2
   }
class Dog extends Animal
{
   public function makeSound()
   {
      echo 'gav-gavv';
   }
}
}
$myCat = new Cat;
$myCat->makeSound(); //реализация№2
$myCat->move();
$Dog = new Dog;

$animal = new Animal;
####################
//Trait

//Создаем трейт

trait myGrettings
{
   public function sayHi()
   {
      echo "Hi";
   }
   public function great($person)
   {
      echo 'Greetings' . $person;
   }
}
//Подключаем трейт
class Person
{
   use myGrettings;

   //перезаписан метод в трейте
   public function sayHi()
   {
      echo "Hello";
   }
}
######
//Интерфейс-реализации
interface EngineInterface

{
   public function on();
   
   public function off();
}

class Car_New
{
   private $color;
   private $year;
   private $manufacturer;
   private $engine;

   // класса Engine
   //function __construct($color, $year, $manufacturer, Engine $engine)
   //Вместо класса Engine указываем интерфейс
   function __construct($color, $year, $manufacturer, EngineInterface $engine)
   {
      $this->color = $color;
      $this->year = $year;
      $this->manufacturer = $manufacturer;
      $this->engine = $engine;
   }
   //Поведение пользователя
   public function startEngine()
   {
      $this->engine->on();
      /**
       * Кодд
       * Реализация
       * Логика мотора
       * Код
       * Много кода
       * Условия, циклы...
       */
   }
   public function stopEngine()
   {
      $this->engine->off();
      /**
       * весь код теперь переехал в класс Engine function stop
       * / */
   }

}
//Создаем класс-мотор связываем с интерфейсом implements EngineInterface
class Engine implements EngineInterface
{
   public function on()
   {

   }
   public function off()
   {

   }

   /* ранее
   public function start()
   {

   }
   public function stop()
   {
   }
   */
}
class anotherEngine implements EngineInterface
{
   public function on()
   {

   }
   public function off()
   {

   }
}
//Создаем мотор
$engine = new Engine;
//Создаем машину
//$new_my_car = new Car_New ('yellow', '1970', 'Mustang', $engine);
$new_my_car = new Car_New ('yellow', '1970', 'Mustang', $anotherEngine);
//Создаем другой мотор
$anotherEngine = new anotherEngine;

//Полиморфизм

abstract class Animal
{
   protected $name;

public abstract function makeSound()
{
   //
}
public function move()
{
      //реализация№1
}

}

class Cat extends Animal
{
      public function makeSound()
   {
      echo 'mya-vv';
   }//реализация№2
   }
class Dog extends Animal
{
   public function makeSound()
   {
      echo 'gav-gavv';
   }
}
//Хозяин животного
class masterAnimal
{
   public function попроситьПодатьзвук(Animal $animal)
   {
return $animal->makeSound();
   }
}

$Cat = new Cat;

$Dog = new Dog;

$я = new masterAnimal;
$z->попроситьПодатьзвук($Cat);
$z->попроситьПодатьзвук($Dog);

?>
