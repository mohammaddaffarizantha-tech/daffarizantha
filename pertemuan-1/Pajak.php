<?php

class Pajak {
private float $tarif;

public function   construct(float $tarif) {
$this->tarif = $tarif;
}
public function hitungTotal(float $hargaProduk): float { return $hargaProduk + ($hargaProduk * $this->tarif);
}
}
