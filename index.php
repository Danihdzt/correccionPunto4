<?php
/*Hacer un programa en PHP para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que si
trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le
pagarán a $25000 por hora. Ejecute su código para calcular el salario con 36 horas trabajadas.
 */

$valorHora = 20000;
$valorHoraExtra= 25000;
$horasTrabajadas = 55 ;
$horasExtras = $horasTrabajadas-40;

if($horasTrabajadas <= 40){
  echo("El salario del trabajador es: ".($valorHora * $horasTrabajadas));
} else if($horasTrabajadas > 40){
  echo("El salario del trabajador es; ".($valorHora * 40 + $horasExtras*$valorHoraExtra));
}

?>