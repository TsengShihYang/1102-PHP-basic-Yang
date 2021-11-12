<h1>使用for迴圈來產生以下的數列</h1>

<h2>1,3,5,7,9……n</h2>
<?php
$n=50;
$count=0;
for($i=1;$i<$n;$i=$i+2){
    $count++;
    // if($i%2!=0){
    echo $i. ",";
    // }

}
echo "loop number".$count;
?>
<h2>10,20,30,40,50,60……n<h2>
<?php
$n=50;
$count=0;
for($i=10;$i<$n;$i=$i+10){
    $count++;
    echo $i. ",";
}
?>    
<h2>3,5,7,11,13,17……97</h2>
<?php



?>