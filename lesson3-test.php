<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <select name="fuel" id="fuel"><br>
                    <option value="petrol">бензин</option>
                    <option value="diesel">дизель</option>
                </select> 
    об’єму двигуна <input type="text" name="engine"/><br>
    рік випуску автомобіля  <input type="text" name="years"/><br>
    вартість автомобіля <input type="text" name="price"/><br>
    <input type="submit">
</form>
<?php


    $fuel = $_POST['fuel'];
	$base_rate_petrol = 50;
	$base_rate_diesel = 70;

$current_date = date(Y);

if(!empty( $_POST['years'])) {
    $years = $_POST['years'];
    $car_old = $current_date - $years;
}
/*К віку – коефіцієнт, що дорівнює кількості повних календарних років (вважається з року, наступного після року випуску авто).
Для нових і вживаних не більше одного року ТЗ, коефіцієнт дорівнює 1)*/
if($car_old <= 1) {
    $k_years = 1;
}elseif ($car_old > 1 && $car_old <=7) {
    $k_years = 2;
}else{
    $k_years = 3;
}
/*К двигуна – коефіцієнт, який визначається від ділення об’єму двигуна в куб. см на 1000 куб. см;*/
if(!empty( $_POST['engine'])) {
    $k_engine = $_POST['engine'] / 1000;
}

if(!empty($_POST['price'])) {
    $price = $_POST['price'];
}


if (($fuel =='petrol')&&($price != null)) {

	$total_price =  $base_rate_petrol * $k_engine * $k_years + $price;
    echo $total_price."<br>";
}
elseif ($years < 1970) {
    echo "cars 1970 old don't support <br>";
}else{
    $total_price = $base_rate_diesel * $k_engine * $k_years + $price;
    echo $total_price."<br>";;
}

?>

</body>
</html>
<!--Формула розрахунку акцизу на ввезення б/в авто визначається так:
Ставка (акцизу) = Ставка (базова) х К двигуна х К віку
де базова ставка – це ставка податку в євро за 1 штуку транспортного засобу:
Бензинові – 50,0 євро;
Дизель – 75,0 євро;
К двигуна – коефіцієнт, який визначається від ділення об’єму двигуна в куб. см на 1000 куб. см;
К віку – коефіцієнт, що дорівнює кількості повних календарних років (вважається з року, наступного після року випуску авто).
Для нових і вживаних не більше одного року ТЗ, коефіцієнт дорівнює 1).
Напишіть скрипт, який використовує HTML-форму з випадаючим списком "бензин/дизель" 
та трьома полями для введення об’єму двигуна (куб. см), рік випуску автомобіля (можна вводити з 1970р.
 по поточний рік), вартість автомобіля.
Скрипт повинен перевірити коректність введених даних, обчислити суму акцизу та вартість автомобіля із урахуванням акцизу
 та вивести результат.-->