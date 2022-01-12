<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть text: <label>
        <input type="text" name="text">
    </label><br>
    <input type="submit">
</form>
<?php
	if (!empty($_POST['text'])) {
		$text=$_POST['text'];
		//text = 'Приклад текста з посиланнями: https://transoftgroup.com , а ось наприклад ссилка на укрнет - http://ukr.net чи ось на цю тему в офіційній документації - https://www.php.net/manual/ru/reference.pcre.pattern.syntax.php Ось так!';
		$text = preg_replace("/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*[^ \.])/is", "$1$2<a href=\"$3\" >$3</a>", $text);
		echo $text;
	}
?>
</body>
</html>