<html lang="">
<head>
	<title>Форма</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	Введіть імена через кому: <label>
		<input type="text" name="str">
	</label><br>
	<input type="submit">
</form>
<?php
	if (!empty($_POST['str'])) { //  Ігор,     Євген ,  Василь, Єгор,    Михайло
		$str = $_POST['str'];
		$arr = array_map('trim', explode(',', $str));
		usort($arr, function ($a, $b) {
			$a = mb_strtoupper($a);
			$b = mb_strtoupper($b);
			$alphabet = array(
				'А' => 1, 'Б' => 2, 'В' => 3, 'Г' => 4, 'Д' => 5, 'Е' => 6, 'Є' => 7, 'Ж' => 8, 'З' => 9, 'И' => 10, 'І' => 11,
				'Ї' => 12, 'Й' => 13, 'К' => 14, 'Л' => 15, 'М' => 16, 'Н' => 17, 'О' => 18, 'П' => 19, 'Р' => 20, 'С' => 21, 'Т' => 22,
				'У' => 23, 'Ф' => 24, 'Х' => 25, 'Ц' => 26, 'Ч' => 27, 'Ш' => 28, 'Щ' => 29, 'Ь' => 30, 'Ю' => 31, 'Я' => 32
			);
			$lengthA = mb_strlen($a);
			$lengthB = mb_strlen($b);
			for ($i = 0; $i < (($lengthA > $lengthB) ? $lengthB : $lengthA); $i++) {
				if ($alphabet[mb_substr($a, $i, 1)] < $alphabet[mb_substr($b, $i, 1)]) {
					$status = -1;
					break;
				} elseif ($alphabet[mb_substr($a, $i, 1)] > $alphabet[mb_substr($b, $i, 1)]) {
					$status = 1;
					break;
				} else {
					$status = 0;
				}
			}
			return $status;
		});
		echo $str2=implode(', ', $arr);
    }
?>
</body>
</html>