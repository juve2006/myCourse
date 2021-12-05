<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть призвіще : <label>
        <input type="text" name="surname">
    </label><br>
    Введіть ім'я : <label>
        <input type="text" name="name">
    </label><br>
    Введіть по-батькові : <label>
        <input type="text" name="fatherName">
    </label><br>
    <input type="submit">
</form>
<?php
//   3. Напишіть скрипт, який використовує HTML-форму для введення прізвища імені
    // та по-батькові користувача. Коли користувач надішле форму, скрипт повинен вивести ініціали.
	//Скрипт повинен працювати коректно, якщо користувач введе декілька пробілів та пробіли
    // на початку і в кінці. Ініціали повинні виводитися великими літерами, навіть,
    // якщо користувач набрав малими.
	
    $name = $_POST['name'];
    
	
	
	
?>

</body>
</html>