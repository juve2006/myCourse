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
	if (!empty($_POST['email'])) {
		$email = trim($_POST['email']);
		$n= (int) strpos($email, '@'); // пошук позиції  в рядку '@' і переведення значення в ціле число (бо виступає як парметр далі)
		$m= (int) strpos($email, '.', "$n"); // пошук позиції крапки в рядку після @
        $last=substr($email, -1, 1); // ласт символ
        $dott=substr($email,"$m",1);
		if ($n==0 || $m==0 || $last==$dott){
			echo 'не правильна електронна адреса';
		} else {
			echo 'правильна електронна адреса';
		}
	}
    else {
        echo 'ви не ввели електронну адресу';
    }
?>
</body>
</html>