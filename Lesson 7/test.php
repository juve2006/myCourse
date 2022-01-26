<?php
class Employee
{
    public $name;

    public $age;

    public $salary;

}

$user1 = new Employee();
$user1->name = 'john';
$user1->age = 25;
$user1->salary = 1000;

$user2 = new Employee();
$user2->name = 'eric';
$user2->age = 26;
$user2->salary = 2000;

echo $user1->salary + $user2->salary;
echo '<br>';
echo $user1->age + $user2->age;

//
//Задача 2pp.Op.Bs.Pr
//
//Создайте объект класса Employee, затем установите его свойства в следующие значения -
//имя 'john', возраст 25, зарплата 1000.
//
//Задача 3pp.Op.Bs.Pr
//
//Создайте второй объект класса Employee, установите его свойства в
// следующие значения - имя 'eric', возраст 26, зарплата 2000.
//
//Задача 4pp.Op.Bs.Pr
//
//Выведите на экран сумму зарплат созданных юзеров.
//
//Задача 5pp.Op.Bs.Pr
//
////Выведите на экран сумму возрастов созданных юзеров.