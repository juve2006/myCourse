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
if (!empty($_POST['height'])) {
    $h = $_POST['height'];
    $l=$h+1;// довжина строки
    for ($i=0; $i<$h; $i++){
        for ($j=0;$j<$l-$i-2;$j++){
            echo ' ';
        }
        for ($k=0;$k<$i+2;$k++) {
            echo "#";
        }
        echo "<br>";
    }
}
//http://www.javaproblems.com/2012/11/java-problem-g-triangles-shape.html
//https://question-it.com/questions/1148203/programmirovanie-na-c-cs50-pechat-blokov-piramidy-mario-dlja-trudnostej-petel
?>
</body>
</html>