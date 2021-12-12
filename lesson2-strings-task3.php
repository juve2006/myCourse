<html lang="">
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть призвіще, імя, по-батькові : <label>
        <input type="text" name="name">
    </label><br>
    <input type="submit">
</form>
<?php
	if (!empty($_POST['name'])) {
	    $fullName = trim(mb_strtolower($_POST['name']));
		$spacePos= mb_strpos($fullName, ' '); // шукаємо перший пробіл внутрішній
		$surname = mb_substr($fullName, 0, $spacePos ); // вибираємо призвіще
        $fullNameWithoutSurname=trim(mb_substr($fullName, $spacePos+1)); // імя побатькові
        $spacePos2 = mb_strpos($fullNameWithoutSurname, ' '); // шукаємо пробіл між призвіщем і імям
        $name= trim(mb_substr($fullNameWithoutSurname,0, $spacePos2)); // імя
        $fatherName=trim(mb_substr($fullNameWithoutSurname, $spacePos2+1)); // по батькові
        $initials = mb_strtoupper(mb_substr($surname,0,1)).". ".mb_strtoupper(mb_substr($name,0,1)).". ".mb_strtoupper(mb_substr($fatherName,0,1)).". ";
        // так як ucwords/ucfirst не працює с кирилицею
        echo "Тільки ініціали:          $initials";
        echo "<hr>";
        $firstLetter=mb_strtoupper(mb_substr($surname,0,1));
        $initials2 = $firstLetter.mb_substr($surname, 1)." ".mb_strtoupper(mb_substr($name,0,1)).". ".mb_strtoupper(mb_substr($fatherName,0,1)).". ";
        echo "Призвіще та  ініціали:          $initials2";
        echo "<hr>";
    }
?>
</body>
</html>