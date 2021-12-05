<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть email: <label>
        <input type="text" name="email">
    </label><br>
    <input type="submit">
</form>
<?php

//   2. Напишіть скрипт, який використовує HTML-форму для введення емейла користувача, який буде перевіряти правильність введення натупним чином:
//Емейл повинен містити символ "@" та хоча б одну крапку після собачки, але не останній символ. Виведіть відповідні повідомлення,
    // правильна чи не правильна електронна адреса.
	if (!empty($_POST['email'])) {
		$email = $_POST['email'];
		//$lenghtStr = strlen($email);
		$n=strpos($email, '@'); // пошук позиції  в рядку '@'
		$m=strpos($email, '.'); // пошук позиції в рядку '.'
		if ($m!==false && $n!==false && $m>$n){  //тут не працює якщо крапка до собачкт
			echo 'правильна електронна адреса';
		} else {
			echo 'не правильна електронна адреса';
		}
		var_dump($email);
		var_dump($m);
		var_dump($n);
		
	}
?>

</body>
</html>