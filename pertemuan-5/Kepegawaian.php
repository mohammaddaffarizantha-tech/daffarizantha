<?php

class Pegawai
{
    protected string $nama;
    protected float $gajiDasar;

    public function __construct(string $nama, float $gajiDasar)
    {
        $this->nama      = $nama;
        $this->gajiDasar = $gajiDasar;
    }

    public function hitungGaji(): float
    {
        return $this->gajiDasar;
    }
}

class PegawaiTetap extends Pegawai
{
    protected float $tunjanganTetap = 2_000_000;

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + $this->tunjanganTetap;
    }
}

class Manajer extends PegawaiTetap
{
    protected float $tunjanganJabatan = 3_000_000;

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + $this->tunjanganJabatan;
    }
}

class Direktur extends Manajer
{
    protected float $tunjanganDirektur = 5_000_000;

    public function hitungGaji(): float
    {
        return parent::hitungGaji() + $this->tunjanganDirektur;
    }
}



$dina   = new PegawaiTetap("Dina", 5_000_000);
$faris  = new Manajer("Faris", 7_000_000);
$rahmat = new Direktur("Rahmat", 10_000_000);

echo "Gaji Dina: Rp" . $dina->hitungGaji() . PHP_EOL;
echo "Gaji Faris: Rp" . $faris->hitungGaji() . PHP_EOL;
echo "Gaji Rahmat: Rp" . $rahmat->hitungGaji() . PHP_EOL;
