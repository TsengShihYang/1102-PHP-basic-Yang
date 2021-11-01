<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>計算結果</title>
</head>
<body>
<?php

$bmi=$_GET['weight']/(($_GET['high'])/100*($_GET['high'])/100);
if($bmi>=18.5 && $bmi<24){
    echo "BMI正常";
}else{
    echo "BMI不正常";
}
?> 

<a href="bmi.php?bmi=<?=$bmi;?>">回首頁</a>
</body>
</html>

