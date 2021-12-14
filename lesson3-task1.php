<html lang="">
<head>
	<title>Форма</title>
	<meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть об'єм двигуна куб. см: <label>
		<input  type="number" name="engine">
	</label><br>
	Введіть рік випуску авто: <label>
		<input  type="number" name="year">
	</label><br>
	Введіть вартість авто, євро: <label>
		<input type="number" name="price">
	</label><br>
	Оберіть вид палива: <label>
		<select name="fuel" id="fuel">
			<option value="dis">Дизель</option>
			<option value="ben">Бензин</option>
		</select>
	</label><br>
	<input type="submit">
</form>
<?php
$baseBenz = 50;
$baseDis= 70;
$currentYear=date ( "Y");

if(!empty( $_POST['fuel'])) {
    $fuel = $_POST['fuel'];
}

if(!empty( $_POST['year'])) {
    $year = $_POST['year'];
    }

if($currentYear-$year<=1){
    $kYear=1;
} else {
    $kYear=$currentYear-$year-1;
}

if(!empty( $_POST['engine'])) {
    $engine=$_POST['engine'];
    $kEngine=$engine/1000;
}

if(!empty( $_POST['price'])) {
    $price=$_POST['price'];
}

if($fuel == "ben") {
    $totalTax = $baseBenz * $kEngine * $kYear;
} else {
    $totalTax=$baseDis*$kEngine*$kYear;
}
if ($year>"1970") {
    $totalPrice = $price + $totalTax;
    echo "Загальна вартість авто: " . $totalPrice . " євро, включаючи акциз " . $totalTax . " євро <br>";
    } else {
    echo "Такі старі автомобілі не підтримуються";
}
?>
</body>
</html>
