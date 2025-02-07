<?php
declare(strict_types=1);

require_once 'autoloader.php';
spl_autoload_register('spl_autoload_register');

use Object\Student;
use Object\Car;
use Object\TV;

$student = new Student();
$student->addListStudents('Дмитрий', 'Денисов');
$student->addListStudents('Иван', 'Петров');
$student->getListStudents();

$car = new Car();
$car->addListCars('Жигули', 'Красный', 535);
$car->addListCars('BMW', 'Белый', 444);
$car->getListCars();

$tv = new TV();
$tv->addListTv();
$tv->addListTv('POLAR', 10);
$tv->getListTv();