<?php

$row=10;

for ($i=0 ;$i<$row;$i++){
    for($j=1;$j<=$row;$j++){
        if($i+1==1 || $i+1==$row ){
            echo "*";
        }else{ 
            if($j==1||$j==$row||$j==$i+1||$j==$row-$i){
                echo "*";
            }else{
                echo "&ensp;";
            }
        }

    }
    echo "<br>";

}?>

