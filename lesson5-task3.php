<html lang="">
<head>
	<title>Форма</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	Введіть цілі числа: <label>
		<input type="text" name="numbers">
	</label><br>
	<input type="submit">
</form>
<?php
//Через форму передайте список цілих чисел. Виведіть наступні результати:
//1) Суму цих чисел;
//2) Середнє значення (float);
//3) Кількість парних чисел;
//4) Всі непарні числа;
	if (!empty($_POST['numbers'])) { //1, 2, 3, 4, 5, 6, 7, 8344, 55, -4, 53, -43, 44, 40, 48, -7
        $numbers = $_POST['numbers'];
		if (preg_match('/^[0-9\-, ]+$/', $numbers )) {
			$arr = array_map('trim', explode(',', $numbers));
			//var_dump($arr);
			function sum($array)
			{
				$sum = 0;
				foreach ($array as $item) {
					$sum += $item;
				}
				echo 'Сума введених чисел - ' . $sum;
			}
			
			function avg($array)
			{
				$sum = 0;
				foreach ($array as $item) {
					$sum += $item;
					$avg = round($sum / count($array), 2);
				}
				echo 'Середнє значення введених чисел- ';
				printf('%0.2f', $avg);
			}
			
			function evenCount($array)
			{
				foreach ($array as $key => $item) {
					if ($item % 2 !== 0) {
						unset($array[$key]);
					}
				}
				echo 'Кількість парних чисел - ' . count($array);
			}
			
			function odd($array)
			{
				foreach ($array as $key => $item) {
					if ($item % 2 === 0) {
						unset($array[$key]);
					}
				}
				echo 'Непарні числа: ' . implode(',', $array);
			}
			
			sum($arr);
			echo '<br>';
			avg($arr);
			echo '<br>';
			evenCount($arr);
			echo '<br>';
			odd($arr);
		}
		else {
		    echo 'Ви ввели не тільки цілі числа';
        }
	}
?>
</body>
</html>