<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>500年內閏年</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>500年內閏年</h1>
    <?php
    $year=2021;    
    $leaps=[];
    for($i=$year;$i<=($year+500);$i++){
        if($i % 400 == 0 || ($i %4 == 0 && $i % 100 !=0)){
            $leaps[]=$i;
        }
    }
// echo "<pre>";
// print_r($leaps);
// echo "<pre>";

$x=2121;
if(in_array($x , $leaps)){
    echo $x . "是閏年";
}else{
    echo $x . "不是閏年";

}

?>
</body>
</html>