<?php
	//Створити інтерфейс IEmployee який наслідує інтерфейс IUser і має додатково методи getSalary, setSalary
	interface IEmployee extends IUser
	{
        public const MIN_SALARY = 7000;

        public function getSalary(): float;

        public function setSalary(float $salary);
	}