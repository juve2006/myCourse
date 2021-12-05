<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть імя, призвіще, по-батькові : <label>
        <input type="text" name="name">
    </label><br>
    <input type="submit">
</form>
<?php

//   3. Напишіть скрипт, який використовує HTML-форму для введення прізвища імені
    // та по-батькові користувача. Коли користувач надішле форму, скрипт повинен вивести ініціали.
	//Скрипт повинен працювати коректно, якщо користувач введе декілька пробілів та пробіли
    // на початку і в кінці. Ініціали повинні виводитися великими літерами, навіть,
    // якщо користувач набрав малими.
	if (!empty($_POST['name'])) {
	    var_dump($_POST['name']);
		echo "<hr>";
	    $name = ltrim(ucwords(strtolower($_POST['name'])));
	    echo "<hr>";
		$spacePos= strpos(ltrim($name), ' ');
		var_dump($spacePos);
		echo "<hr>";
		$surname = substr($name, 0, $spacePos );
		//  IVANOV    ivan                  Ivanovich
		echo "<hr>";
		var_dump($surname);
	
	}
	
	
?>

</body>
</html>