<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <h1>Kondisi nilai</h1>
<?php $nilai = 89;?>
<?php if($nilai>=80) : ?>
    <h2>Nilai kamu adalah A dengan nilai <?= $nilai; ?></h2>
    <?php elseif($nilai>=60): ?>
        <h2>Nilai kamu adalah B dengan nilai <?= $nilai; ?></h2>
        <?php else: ?>    
            <h2>Nilai kamu adalah C dengan nilai <?= $nilai; ?></h2>
<?php endif ?>
<hr>
<h1>Kondisi Mobil</h1>
<?php $mesin="bagus";$body="bagus";?>
<?php if($mesin=="bagus" && $bodyb="bagus") : ?>
    <h2>Mesin bagus and body bagus</h2>
    <?php elseif($mesin="bagus" || $body="bagus"): ?>
        <h2>Mesin bagus or body bagus</h2>
        <?php elseif($mesin!="bagus" && $body!="bagus") : ?>        
            <h2>Mesin jelek dan body jelek</h2>
<?php endif ?>
</body>
</html>