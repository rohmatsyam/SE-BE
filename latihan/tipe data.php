<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COBA</title>
</head>
<body>
    <?php 
    $arr=["Satu",1,"Oke"];
    $a = 10;
    $b = 5;
    ?>
    <h1>Aku adalah angka <?= $arr[0]; ?> ditulis <?= $arr[1]; ?> selesai <?= $arr[2]; ?></h1>
    <?= var_dump($arr) ?>
    <hr>
    <h1>OPERATOR</h1>
    <hr>
    <h2>Aritmatika</h2>
    <?php $mod = $a % $b;
    echo "$a % $b = $mod";    
    echo "<br>";
    $pow = $a ** $b;
    echo "$a ** $b = $pow";    
    ?>
    <hr>
    <h2>Penugasan</h2>
    <?php 
        $c = $a;
        echo "c adalah $c";
        echo "<br>";        
        $c += $c;
        echo "c ditambah c = $c";
        echo "<br>";        
        $c -= 5;
        echo "c dikurangi 5 = $c";
        echo "<br>";        
        $c *= 5;
        echo "c dikali 5 = $c";
        echo "<br>";        
        $c ** 2;
        echo "c dipamgka 2 = $c";
        echo "<br>";        
        $c /= 10;
        echo "c dibagi 10 = $c";
        echo "<br>";        
        $c %= 10;
        echo "c modulus 10 = $c";        
    ?>
    <hr>
    <h2>Inc & Dec</h2>
    <?php $d=10;    
    echo "D adalah $d";
    $d++;
    echo "increment = $d";
    $d--;
    echo "decrement = $d";
    ?>    
</body>
</html>