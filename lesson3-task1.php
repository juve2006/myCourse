<html lang="">
<head>
	<title>Форма</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	Введіть об'єм двигуна куб. см: <label>
		<input  minlength="4" maxlength="4" type="number" name="engine">
	</label><br>
	Введіть рік випуску авто: <label>
		<input minlength="4" maxlength="4" type="number" name="year">
	</label><br>
	Введіть вартість авто, євро: <label>
		<input type="number" name="price">
	</label><br>
	Оберіть вид палива: <label>
		<select name="fuel" id="fuel">
			<option value="dis">Дизель</option>
			<option value="benz">Бензин</option>
		</select>
	</label><br>
	<input type="submit">
</form>
<?php
//ормула розрахунку акцизу на ввезення б/в авто визначається так:
//Ставка (акцизу) = Ставка (базова) х К двигуна х К віку
//де базова ставка – це ставка податку в євро за 1 штуку транспортного засобу:
//Бензинові – 50,0 євро;
//Дизель – 75,0 євро;
//К двигуна – коефіцієнт, який визначається від ділення об’єму двигуна в куб. см на 1000 куб. см;
//К віку – коефіцієнт, що дорівнює кількості повних календарних років (вважається з року, наступного після року випуску авто).
//Для нових і вживаних не більше одного року ТЗ, коефіцієнт дорівнює 1).
	$baseBenz = 50;
	$baseDis= 70;
		$fuel = $_POST['fuel'];
		$engine=$_POST['engine'];
		$price=$_POST['price'];
		$fuel=$_POST['fuel'];
?>
</body>
</html>