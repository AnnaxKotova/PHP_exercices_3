<?php
//Creation d'un tableau associatif


//exercice 4
$departments["02"] ="Aisne"; //sinon on va avoir 2 a la place de 02
$departments[60] ="Oise";
$departments[62] ="Pas-de-Calais";
$departments[80] ="Somme";

//ou
//$departments = ["02" => "Aisne", 59 => 'Nord', etc]

//exercice 5

echo "$departments[02] $departments[60] $departments[62] $departments[80]"."</br>";

//exercice 6

foreach ($departments as $key => $value)
{
   echo "Le département "."$value"." a le
   numéro "."$key"."</br>";
}