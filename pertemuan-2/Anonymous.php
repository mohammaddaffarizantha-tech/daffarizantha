<?php

$logger = new class ("INFO") {

    // Constructor dengan promoted property
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg";
    }
};

$logger->log("Sistem berjalan");
