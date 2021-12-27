<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	Введіть текст: <label>
		<input type="text" name="text">
	</label><br>
	<input type="submit">
</form>
<?php
	//Потрібно розбити текст на рядки таким чином, щоб у рядку було не більше
	// 40 символів. Але слова розривати не можна, а треба переносити повністю.
	const K = 40;
	
	if (!empty($_POST['text'])) {
		$text = $_POST['text'];
		$arrInput = explode(' ', $text);
		foreach ($arrInput as $word) {
			if (mb_strlen($word) > K) {
				echo "Є слово більше 40 символів, будь-ласка скоротіть його";
			}
		}
		$lenght = 0;
		$arrOutput = [];
		$lines = 0;
		foreach ($arrInput as $word) {
			$lenght++; // пробіл для кожного слова
			$lenght += mb_strlen($word);
			if ($lenght > K) {
				$lines++; // перенос на новий рядок
				$lenght = mb_strlen($word) + 1;
			}
				$arrOutput[$lines] .= $word . " ";
		}
		$text2 = implode("<br>", $arrOutput);
		echo $text2;
	}
?>
</body>
</html>

