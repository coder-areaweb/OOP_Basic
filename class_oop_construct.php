<?php

class Cellphone 
{
    public $manufacturer;
    public $color;
    public $shape;
    public $tech_spec;

    public function __construct($manufacturer,$color,$shape,$tech_spec)
{
   $this->manufactures = $manufacturer;
   $this->color = $color;
    $this->shape = $shape;
    $this->tech_spec = $tech_spec;

}

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

//Созданим объект Описываем атрибуты
$phone = new Cellphon ('LG','red','rectangle','Li-On');

//Вызываем требуемое действие
$phone->dial();
$phone->answer();

}
####
class fountainpen

{
//Аттрибуты
public $case;
public $penrefill;
public $pen_ink;
public $ink_color;

public function __construct($case, $penrefill, $pen_ink, $ink_color)
{
    this->case = $case;
    this->penrefill = $penrefill;
    this->pen_ink = $pen_ink;
    this->ink_color = $ink_color;
}
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
$mypen = new fountainpen ('elipse','red','yes')

//Вызываем требуемое действие
$mypen->write();
$mypen->underline();
}

?>