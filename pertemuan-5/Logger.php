<?php



interface Logger
{
    public function log(string $pesan): void;
}

interface Formatter
{
    public function format(string $pesan): string;
}



class FileLogger implements Logger
{
    public function log(string $pesan): void
    {
        echo "Menulis ke file: $pesan\n";
    }
}

class ConsoleLogger implements Logger
{
    public function log(string $pesan): void
    {
        echo "Menampilkan ke konsol: $pesan\n";
    }
}

class DatabaseLogger implements Logger
{
    public function log(string $pesan): void
    {
        echo "Menyimpan ke database: $pesan\n";
    }
}



class AdvancedLogger implements Logger, Formatter
{
    public function format(string $pesan): string
    {
        return "[LOG] " . strtoupper($pesan);
    }

    public function log(string $pesan): void
    {
        echo $this->format($pesan) . "\n";
    }
}


$loggers = [
    new FileLogger(),
    new ConsoleLogger(),
    new DatabaseLogger(),
    new AdvancedLogger(),
];

foreach ($loggers as $logger) {
    $logger->log("Sistem berjalan");
}
