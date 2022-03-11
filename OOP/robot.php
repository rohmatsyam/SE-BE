<?php
class Robot
{
    private $warnaKepala, $warnaBadan, $warnaKaki, $jSenjata;
    # dijalankan saat inisialisasi object
    public function __construct($warnaKepala, $warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaKepala = $warnaKepala;
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }

    public function getWarnaBadan()
    {
        return $this->warnaKepala . " " . $this->warnaBadan . " " . $this->warnaKaki . " " . $this->jSenjata;
    }
    public function changeWarnaBadan($warnaBadan, $warnaKaki, $jSenjata)
    {
        $this->warnaBadan = $warnaBadan;
        $this->warnaKaki = $warnaKaki;
        $this->jSenjata = $jSenjata;
    }
}

$robot = new Robot("Merah", "Biru", "Kuning", 10);
echo $robot->getWarnaBadan();
$robot->changeWarnaBadan("Hijau", "Putih", 2);
echo "<br>";
echo $robot->getWarnaBadan();
