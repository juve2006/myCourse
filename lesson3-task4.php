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
	preg_match_all ("/\d+/", $str, $array);
	
	
	foreach ($array as $key=>$value){
		foreach ($value as $k=>$width){
		    if  ($width<1 || $width > 100){
		        break;
            } else {
			    $s = "<span style='height:10px; background: red'> &nbsp; </span>";
			    $s_1 = str_repeat($s, $width);
			    echo $s_1 . $width;
			    echo "<br>";
		    }
		}
	}
?>
</body>
</html>