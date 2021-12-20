<html lang="">
<head>
	<title>Форма</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	Введіть цілі числа через кому від 1 до 100: <label>
		<input type="text" name="str">
	</label><br>
	<input type="submit">
</form>
<?php
	if (!empty($_POST['str'])) {
		$str = $_POST['str'];
	}
switch (true){
    case preg_match("/\p{L}/", $str):
        echo "Помилка, введено літери";
        break;
    case preg_match("/[0-9]*[.][0-9]+/", $str):
        echo "Помилка, не ціле число";
        break;
    case preg_match("/-\d+/", $str):
        echo "Помилка, відємне число";
        break;
    case preg_match("/\d{3,}/",$str):
        echo "Число не в діапазоні від 1 до 100";
        break;
    default: preg_match_all("/\d+/", $str, $array);
}
		foreach ($array as $key=>$value){
		foreach ($value as $k=>$width){
			    $s = "<span style='height:10px; background: red'> &nbsp; </span>";
			    $s_1 = str_repeat($s, $width);
			    echo $s_1 . $width;
			    echo "<br>";
		    }
		}
?>
</body>
</html>