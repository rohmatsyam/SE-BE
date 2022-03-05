<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>

<body>
    <?php
    $nama = ["rohmat", "dodi", "iwan", "fizza", "kojin", "rendi", "bagus", "syamsul", "huda", "bossman"];
    $nilaiIndo = [99, 34, 23, 45, 76, 80, 81, 76, 34, 45];
    $nilaiMat = [95, 56, 43, 76, 87, 34, 98, 12, 67, 23];
    ?>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td colspan="2">Bahasa Indonesia</td>
            <td colspan="2">Matematika</td>
        </tr>
        <?php for ($i = 0; $i < count($nama); $i++) : ?>
            <tr>
                <td><?= $nama[$i]; ?></td>
                <td><?= $nilaiIndo[$i]; ?></td>
                <td>
                    <?php if ($nilaiIndo[$i] >= 80) : ?>
                        A
                    <?php elseif ($nilaiIndo[$i] >= 60) : ?>
                        B
                    <?php else : ?>
                        C
                    <?php endif ?>
                </td>
                <td><?= $nilaiMat[$i]; ?></td>
                <td>
                    <?php if ($nilaiMat[$i] >= 80) : ?>
                        A
                    <?php elseif ($nilaiMat[$i] >= 60) : ?>
                        B
                    <?php else : ?>
                        C
                    <?php endif ?>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>