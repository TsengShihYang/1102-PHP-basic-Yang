<?php
function dd($var)
{
    echo "<pre>";
    print_r($var);
    echo "<pre>";
} ?>

<?php
$errArr = [
    ['id' => 's1', 'message' => 'del id s1', 'type' => 'danger'],
    ['id' => 's2', 'message' => 'del id s2', 'type' => 'primary'],
    ['id' => 's3', 'message' => 'del id s3', 'type' => 'dark'],
];
$age = [
    "peter" => "35",
    "ben" => "37",
    "joe" => "43",
];
// foreach ($errArr as $key => $value) {
//     foreach ($value as $valuekey2 => $valuevalue2) {
//         // dd($valuevalue2);
//     }
//     dd($value);
// };

// dd($age);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>img</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">

        <?php
        dd($errArr);
        ?>
        <?php foreach ($errArr as $key => $value) : ?>
            <div class="alert alert-<?= $value['type'];?>" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <h3 style="text-align: center;"><?= $value['message']; ?></h3>
            </div>
        <?php endforeach; ?>

     
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>