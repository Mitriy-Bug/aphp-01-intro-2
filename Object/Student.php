<?php
declare(strict_types=1);
namespace Object;
class Student
{
    public string $name; //Имя студента
    public string $surname; // Фамилия студента
    public array $listStudents = []; // Массив списка студентов

    public function addListStudents(string $name, string $surname): void
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->listStudents[] = ['name' => $this->name, 'surname' => $this->surname];
    }
    public function getListStudents(): void
    {
        foreach ($this->listStudents as $listStudent) {
            echo $listStudent['name'] . ' ' . $listStudent['surname'] . PHP_EOL;
        }
    }
}