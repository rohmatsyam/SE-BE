<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body>
    <?php $arr=["Satu",1,"Oke"]; $a = 10; $b = 5;?>
    <h1>Aku adalah angka <?= $arr[0]; ?> ditulis <?= $arr[1]; ?> selesai <?= $arr[2]; ?></h1>
    <?= var_dump($arr) ?>
    <hr>
    <h1>OPERATOR</h1>
    <hr>
    <h2>Aritmatika</h2>
    <h5><?= $a; ?> + <?= $b; ?> adalah <?= $a + $b; ?></h5>
    <h5><?= $a; ?> - <?= $b; ?> adalah <?= $a - $b; ?></h5>
    <h5><?= $a; ?> * <?= $b; ?> adalah <?= $a * $b; ?></h5>
    <h5><?= $a; ?> ** <?= $b; ?> adalah <?= $a ** $b; ?></h5>
    <h5><?= $a; ?> / <?= $b; ?> adalah <?= $a / $b; ?></h5>
    <h5><?= $a; ?> % <?= $b; ?> adalah <?= $a % $b; ?></h5>

    <hr>
    <h2>Penugasan</h2>
    <h5>C adalah <?= $c=$a; ?></h5>
    <h5>C += C adalah <?= $c+=$b; ?></h5>
    <h5>C -= C adalah <?= $c-=$b; ?></h5>
    <h5>C ** 2 adalah <?= $c**2; ?></h5>
    <h5>C /= 5 adalah <?= $c/=5; ?></h5>    
    <?php $c=$a; ?>
    <h5>C %= 3 adalah <?= $c%=3; ?></h5>         
    <hr>
    <h2>Inc & Dec</h2>
    <?php $d = 10; ?>
    <h5>D adalah <?= $d; ?></h5>
    <?php $d++; ?>
    <h5>D++ adalah <?= $d; ?></h5>
    <?php $d--; ?>
    <h5>D-- adalah <?= $d; ?></h5>
    <hr>
    <h2>Relasi</h2>    
    <h5>A > B = <?= var_dump($a>$b); ?></h5>
    <h5>A < B =<?= var_dump($a<$b); ?></h5>
    <h5>A == B = <?php var_dump($a==$b); ?></h5>    
    <h5>A != B = <?php var_dump($a!=$b); ?></h5>
    <h5>A >= B = <?php var_dump($a>=$b); ?></h5>
    <h5>A <= B = <?php var_dump($a<=$b); ?></h5>
    <hr>
    <h2>Logika</h2>
    <?php $T=true; $F=false;
    $and = $T && $F;
    $or = $T || $F;
    $not = !$T;
    ?>        
    <h5>T adalah <?= var_dump($T); ?> F adalah <?= var_dump($F); ?></h5>
    <h5>AND <?= var_dump($and); ?></h5>
    <h5>OR <?= var_dump($or); ?></h5>
    <h5>NOT <?= var_dump($not); ?></h5>
    <h2>Ternary</h2>
    <?php $ternary=$T?true:false ?>
    <h5>$T?true:false <?= var_dump($ternary); ?></h5>
</body>
</html>