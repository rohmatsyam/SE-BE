<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
<?php $nilai = 89;?>
<?php if($nilai>=80) : ?>
    <h1>Nilai kamu adalah A dengan nilai <?= $nilai; ?></h1>
    <?php elseif($nilai>=60): ?>
        <h1>Nilai kamu adalah B dengan nilai <?= $nilai; ?></h1>
        <?php else: ?>    
            <h1>Nilai kamu adalah C dengan nilai <?= $nilai; ?></h1>
<?php endif ?> 
</body>
</html>