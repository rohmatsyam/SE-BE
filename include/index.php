<?php
require("func.php");
$bakso = new Order();
$bakso->buatPesanan("Bakso", 10000, 0);
echo $bakso->getPesanan();
$bakso->deletePesanan();
echo $bakso->getPesanan();
