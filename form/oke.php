<?php
$tujuan = $_POST['tujuan'];
$jumlah_tiket = $_POST['jumlah_tiket'];

$ongkos = menentukanOngkos($tujuan);
$hargaTotal = $ongkos * $jumlah_tiket;

echo "Tujuan : " . $tujuan, "<br>";
echo "Harga : " . $ongkos, "<br>";
echo "Jumlah Tiket : " . $jumlah_tiket, "<br>";
$diskon = menentukanDiskon($jumlah_tiket, $hargaTotal);
echo "Total harga : " . $hargaTotal, "<br>";
$hargaBersih = $hargaTotal - $diskon;
echo "Harga bersih : " . $hargaBersih, "<br>";

function menentukanOngkos($tujuan)
{
    switch ($tujuan) {
        case "jakarta":
            $ongkos = 100000;
            break;
        case "tasikmalaya":
            $ongkos = 60000;
            break;
        case "garut":
            $ongkos = 70000;
            break;
        case "tangerang":
            $ongkos = 110000;
            break;
        default:
            break;
    }
    return $ongkos;
}
function menentukanDiskon($jumlah_tiket, $hargaTotal)
{
    if ($jumlah_tiket >= 10) {
        $diskon = ($hargaTotal * 20) / 100;
        echo "Diskon 20% = " . $diskon, "<br>";
    } elseif ($jumlah_tiket >= 5) {
        $diskon = ($hargaTotal * 15) / 100;
        echo "Diskon 15% = " . $diskon, "<br>";
    } elseif ($jumlah_tiket >= 3) {
        $diskon = ($hargaTotal * 10) / 100;
        echo "Diskon 10% = " . $diskon, "<br>";
    } else {
        $diskon = 0;
        echo "Diskon 0% = " . $diskon, "<br>";
    }
    return $diskon;
}
