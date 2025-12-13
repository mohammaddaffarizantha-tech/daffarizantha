<?php

class Produk
{
    protected string $nama;
    protected int $harga;

    public function __construct(string $nama, int $harga)
    {
        $this->nama  = $nama;
        $this->harga = $harga;
    }

    public function getHarga(): int
    {
        return $this->harga;
    }
}


class ProdukDiskonPersen extends Produk
{
    protected float $diskonPersen;

    public function __construct(string $nama, int $harga, float $diskonPersen)
    {
        parent::__construct($nama, $harga);
        $this->diskonPersen = $diskonPersen;
    }

    public function getHarga(): int
    {
        return (int) (parent::getHarga() * (1 - $this->diskonPersen));
    }
}


class ProdukDiskonNominal extends Produk
{
    protected int $potongan;

    public function __construct(string $nama, int $harga, int $potongan)
    {
        parent::__construct($nama, $harga);
        $this->potongan = $potongan;
    }

    public function getHarga(): int
    {
        return max(0, parent::getHarga() - $this->potongan);
    }
}


class ProdukPromo extends ProdukDiskonPersen
{
    protected float $diskonTambahan = 0.05; // 5% tambahan

    public function getHarga(): int
    {
        $hargaSetelahDiskon = parent::getHarga();
        return (int) ($hargaSetelahDiskon * (1 - $this->diskonTambahan));
    }
}



$produk1 = new ProdukDiskonPersen("Laptop", 10_000_000, 0.15);
$produk2 = new ProdukDiskonNominal("Monitor", 3_000_000, 500_000);
$produk3 = new ProdukPromo("Smartphone", 8_000_000, 0.10);

echo "Harga Laptop (diskon %): Rp" . $produk1->getHarga() . PHP_EOL;
echo "Harga Monitor (diskon nominal): Rp" . $produk2->getHarga() . PHP_EOL;
echo "Harga Smartphone (promo): Rp" . $produk3->getHarga() . PHP_EOL;
