<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>威力彩數字不重複</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>威力彩數字不重複</h1>
<?php
// echo rand(1,38);
$i=0;
$nums=[];
while(count($nums) <6){
    $t=rand(1,38);
    if(!in_array($t,$nums)){
        $nums[]=$t;   
    }
    $i++;
}
// echo "<pre>";
// print_r($nums);
// echo "<pre>";
echo "迴圈次數".$i;
echo"<hr>";

foreach($nums as $num){
    echo "<div class='ball'>" .$num. "</div>";
}

echo "<br>";
echo "<div class='ball'>".rand(1,8);

?>

</body>
</html>