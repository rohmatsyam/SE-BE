<?php
class Order
{
    private $menu, $hargaTotal, $diskon;
    public function buatPesanan($menu, $harga, $diskon)
    {
        $afterDisc = ($harga * $diskon) / 100;
        $this->hargaTotal = $harga - $afterDisc;
        $this->menu = $menu;
        $this->diskon = $diskon;
    }
    public function getPesanan()
    {
        return $this->menu . " " . $this->hargaTotal . " " . $this->diskon;
    }
    public function updatePesanan($menu, $harga, $diskon)
    {
        $this->menu = $menu;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }
    public function deletePesanan()
    {
        $this->menu = null;
        $this->diskon = null;
        $this->hargaTotal = null;
    }
}
