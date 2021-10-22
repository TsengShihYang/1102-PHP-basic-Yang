<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>建立陣列練習</title>
    <link rel="stylesheet" href="/style.css">


</head>
<body>

<h1>建立陣列練習</h1>;
<?php

$subject = ['國文', '英文', '數學', '地理', '歷史'];
$name['judy']=['國文'=>95,'英文'=>64,'數學'=>70,'地理'=>90,'歷史'=>84];
$name['amo']=['國文'=>88,'英文'=>78,'數學'=>54,'地理'=>81,'歷史'=>71];
$name['john']=['國文'=>45,'英文'=>60,'數學'=>68,'地理'=>70,'歷史'=>62];
$name['peter']=['國文'=>59,'英文'=>32,'數學'=>77,'地理'=>54,'歷史'=>42];
$name['hebe']=['國文'=>71,'英文'=>62,'數學'=>80,'地理'=>62,'歷史'=>64];

echo "<pre>";
print_r($name);
print_r($subject);
echo "<pre>";

$student=array_keys;

print_r($name['judy']);
echo "judy的數學分數是".$name['judy'][2]."分";

// $score = [    ]

?>
</body>
</html>
