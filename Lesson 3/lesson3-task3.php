<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть висоту піраміди: <label>
        <input type="text" name="height">
    </label><br>
    <input type="submit">
</form>

<?php
echo "<div>";
    if (!empty($_POST['height'])) {
        $h = $_POST['height'];
    }
if ($h>=1 && $h <=15) {
    $l = $h + 1;// довжина строки
    for ($i = 0; $i < $h; $i++) {
        for ($j = 0; $j < $l - $i - 2; $j++) {
            print ("&nbsp;&nbsp;");
        }
        for ($k = 0; $k < $i + 2; $k++) {
            print ("#");
        }
        echo "<br>";
    }
} else {
    echo "Введіть висоту в діапазоні з 1 до 15";
}
echo "</div>";
?>
</body>
</html>