<?php
//	Створити клас Calculator. В класі реалізувати методи додавання двох чисел, віднімання, ділення, множення.
//Створити екземпляр класу Calculator з викликом всіх методів для провірки працездатності коду. Результат роботи методів вивести на екран
//Код повинен бути строго типізований, аргументи методів мають бути типу float.
	
	class Calculator
	{
		private float $result;
		
		public function add(float $a, float $b): float
		{
			$this->result = $a + $b;
			return $this->result;
		}
		
		public function multiply(float $a, float $b):float
		{
			$this->result = $a * $b;
			return $this->result;
		}
		
		public function subtract(float $a, float $b):float
		{
			$this->result = $a - $b;
			return $this->result;
		}
		
		public function divide (float $a, float $b):float
		{
			$this->result = $a / $b;
			return $this->result;
		}
	}
	
	$example = new Calculator();
	echo "Результат роботи методу add: ".$example->add(2, 2);
	echo '<br>';
	echo "Результат роботи методу multiply: ".$example->multiply(2, 2);
	echo '<br>';
	echo "Результат роботи методу subtract: ".$example->subtract(2, 2);
	echo '<br>';
	echo "Результат роботи методу divide: ".$example->divide(2, 2);
	echo '<br>';