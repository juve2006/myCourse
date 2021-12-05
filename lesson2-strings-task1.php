<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть імена через кому: <label>
        <input type="text" name="name">
    </label><br>
    <input type="submit">
</form>
<?php
    //Напишіть скрипт, який використовує HTML-форму для введення списку імен через кому,
    // та виведе цей список замінивши "," на ";".
if (!empty($_POST['name'])) {
    $names = $_POST['name'];
    $trimNames=str_replace(",", ";", $names);
    echo "Виводяться імена через крапку з комою: $trimNames <br>";
}
?>

</body>
</html>