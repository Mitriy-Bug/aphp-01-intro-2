<?php
declare(strict_types=1);
namespace Object;
class Car
{
    public string $carBrand; //марка машины
    public string $colorCar; // цвет машины
    public array $listCars = []; // Массив списка машин

    public function addListCars(string $carBrand, string $colorCar): void
    {
        $this->carBrand = $carBrand;
        $this->colorCar = $colorCar;
        $this->listCars[] = ['brand' => $this->carBrand, 'color' => $this->colorCar];
    }
    public function getListCars(): void
    {
        foreach ($this->listCars as $listCar) {
            echo 'Автомобиль - ' . $listCar['brand'] . ', цвет - ' . $listCar['color'] . PHP_EOL;
        }
    }
}