<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COBA</title>
</head>
<body>
    <?php $arr=["Satu",1,"Oke"];?>
    <h1>Aku adalah angka <?= $arr[0]; ?> ditulis <?= $arr[1]; ?> selesai <?= $arr[2]; ?></h1>
    <?= var_dump($arr) ?>
    <hr>         
</body>
</html>