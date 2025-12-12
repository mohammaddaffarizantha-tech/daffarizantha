<?php

class Counter {
    public static int $count = 0;
    public const LABEL = "Jumlah objek";

    public function __construct() {
        self::$count++;
    }

    public static function reset() {
        self::$count = 0;
    }
}

// Membuat object
new Counter();
new Counter();
new Counter();

// Cetak hasil
echo Counter::LABEL . ": " . Counter::$count;

// Reset counter
Counter::reset();

// Cetak lagi setelah reset
echo " Setelah reset: " . Counter::$count;
