<?php
$month = array('Janvier', 'Février','Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août','Septembre', 'Octobre', 'Novembre', 'Décembre'
);
//on peut remplacer array() par []

var_dump($month);

print_r($month); //pour une aggichage de tout le tableu

///exercice 2
echo $month[5]; //juin
echo '</br>';



//exercice 3
for ($i =0; $i < count($month); $i++) // car j'ai pas mis des indexes on commence par 0, toujours < pas égale (car 12 n'existe pas))
{
    echo $month[$i]." ";
}
