<?php

class Cellphone 
{
    public $manufacturer;
    public $color;
    public $shape;
    public $tech_spec;

    //Поведение объекта
public function dial()
{
   /*
   кусок кода завода мотора
   */ 
}
public function answer()
{
   /*
   кусок кода завода мотора
   */ 
}
public function dial()
{
   /*
   кусок кода завода мотора
   */ 
}
public function talk_into()
{
   /*
   кусок кода завода мотора
   */ 
}

//Созданим объект
$new_phone = new Cellphone;
//Описываем атрибуты машины
$new_phone->color = "red";
$new_phone->shape = 'rectangle';
$new_phone->tech_spec = 'Li-On';
$new_phone->manufacturer = 'LG';

//Вызываем требуемое действие
$new_phone->dial();
$new_phone->answer();

}
####
class fountainpen

{
//Аттрибуты
public $case;
public $penrefill;
public $pen_ink;
public $ink_color;
    //Поведение объекта
    public function write()
{
   /*
   кусок кода завода мотора
   */ 
}
public function pass_round()
{
   /*
   кусок кода завода мотора
   */ 
}
public function underline()
{
   /*
   кусок кода завода мотора
   */ 
}
//Созданим объект
$mypen = new fountainpen;
$mypen ->case = 'elipse';
$mypen ->pen_ink = 'red';

//Вызываем требуемое действие
$mypen->write();
$mypen->underline();
}
################
class Lock
{
public $lock_body;
public $keyhole;
public $key;

function inser_key()
{
    /*
    кусок кода завода мотора
    */ 
 }
function turn_key()
{
    /*
    кусок кода завода мотора
    */ 
 }

}
$mylock = new Lock;
$mylock ->lock_body = 'circle';
$mylock ->keyhole = 'front';

$mylock->inser_key();
$mylock->turn_key();
############
class Calculator
{
public $button;
public $display;

function on()
{
    /*
    кусок кода завода мотора
    */ 
 }
 function press_key ()
 {
    /*
    кусок кода завода мотора
    */ 
 }
$Calc = new Calculator;
$Calc->button = '1';
$Calc->display = '2px';

$Calc->on();
$Calc->press_key();

}
?>
