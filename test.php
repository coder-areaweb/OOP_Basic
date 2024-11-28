class Automobile
{
    //Атрибуты объекта + сокрытие атрибутов от пользователей
private $color;
private $year;
private $techattib;
private $manufactures;



public function __construct($color,$year,$techattib,$manufactures)
{
    $this->change_color($color);
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
//Меняем цвет setter method

public function change_color($color)
{
   if( is_string($color))
   {
this->color = $color;
   }
}
//Добавляем еще функцию getter method
public function display_color()
{
   return $this->color;
}

}
//Созданим объект + Описываем атрибуты машины
$myCar = new Automobile ('red', '2024', 'disel', 'BMW');
$myCar->change_color('blue');
//echo $myCar->color; //не понятно поменялся ли цвет
echo $myCar->display_color();

//Вызываем требуемое действие
$myCar->startEngine();
$myCar->go();

?>
