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
	if (!empty($_POST['numbers'])) { //1, 2, 3, 4, 5, 6, 7, 8344, 55, -4, 53, 44, 40
        $numbers = $_POST['numbers'];
		$arr = array_map('trim', explode(',', $numbers));
        /*$arr = array_map('oInt', $arr);

        foreach ($arr as $item){
            if (!is_int($item)){
                echo "Ви ввели не цілі числа, будь-ласка перевірти введені дані";
                break;
            }
        }
       var_dump($arr);
        function oInt($array){
            foreach ($array as $ele){
                $ele*=1;
            }
        }*/
        function sum($array){
            foreach ($array as $item) {
                $sum+=$item;
            }
            echo 'Сума введених чисел - '.$sum;
        }
        function avg($array){
            foreach ($array as $item) {
                $sum+=$item;
                $avg = round($sum/count($array), 2);
            }
            echo 'Середнє значення введених чисел - '.$avg;
        }
        function even($array){
            foreach ($array as $key=>$item){
                if ($item%2!==0) {
                    unset($array[$key]);
                }
            }
            echo 'Кількість парних чисел - '.count($array);
        }
        sum($arr);
        echo '<br>';
        avg($arr);
        echo '<br>';
        even($arr);
    }
?>
</body>
</html>