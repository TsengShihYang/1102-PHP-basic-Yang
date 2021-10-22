<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>順序交換</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>順序交換</h1>
<?php
$a=[2,4,6,7,8,9];

echo "<pre>";
print_r($a);
echo "<pre>";
$count=(count($a)%2 ==0)? count($a)/2 : (count($a)-1)/2;
for($i=0;$i<$count;$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
}

echo "<pre>";
print_r($a);
echo "<pre>";
?>


</body>
</html>