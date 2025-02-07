<?php
declare(strict_types=1);
namespace Object;
class TV
{
    public string $brand;
    public int $diagonal;
    public array $listTV = [];

    public function addListTv(string $brand = 'Неизвестный бренд', int $diagonal = 0): void
    {
        $this->brand = $brand;
        $this->diagonal = $diagonal;
        $this->listTV[] = ['brand' => $this->brand, 'diagonal' => $this->diagonal];
    }
    public function getListTV(): void
    {
        foreach ($this->listTV as $tv) {
            echo 'Телевизор - ' . $tv['brand'] . ', с диагональю ' . $tv['diagonal'] . PHP_EOL;
        }
    }
}