
<?php
//Числами Фібоначі називають послідовність натуральних чисел, де перше число 1, друге 1,
    // а кожне наступне - це сума двох попередніх. Виведіть перших 20 чисел Фібоначі.
    // Задачу зробіть двома способами: з рекурсією та без.
	function getFib($n): string
	{
		$fib = [1,1];
		for ($i = 2; $i < $n; $i++){
		    $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
		return implode(', ',$fib);
	}
 echo (getFib(20).'<br>');
	
	/*function fibonacci($n): int
	{
		return $n < 3 ? 1 : fibonacci($n - 1) + fibonacci($n - 2);
	}
	echo fibonacci(5);*/