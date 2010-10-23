<?php

$tableau[] = 'Nhung';
$tableau[] = 'Marc';
$tableau[] = 'Lyne';
$tableau[] = 'Clément';
$tableau[] = 'Doris';
$tableau[] = 'Jean-Fred';
$tableau[] = 'Ginette';

$tableau2 = $tableau;


do {
    
    shuffle($tableau);

    $correct = true;
    $i = 0;

    foreach($tableau as $item){
        if($item==$tableau2[$i]){
            $correct = false;
        }    
        $i++;
    }
} while ($correct == false);

$i = 0;
foreach($tableau as $item){

    echo $item." -> ".$tableau2[$i].'<br/>';
    
    $i++;
}
?>