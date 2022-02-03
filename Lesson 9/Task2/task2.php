<?php
//declare(strict_types=1);
//Створити інтерфейс IUser з методами getName, setName, getAge, setAge, getGender, setGender.
//Створити інтерфейс IEmployee який наслідує інтерфейс IUser і має додатково методи getSalary, setSalary
//Зстворити класс Employee з довільними даними. Створити декілька екземлярів класу Employee та вивести всю інформацію на екран.

require_once 'IUser.php';
require_once 'IEmployee.php';
require_once 'Employee.php';

$empl = new Employee();
$empl->setName('dsdвіsєєєві');
echo $empl->getName();
$empl->setAge(32);
echo $empl->getAge();
