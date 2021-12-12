
<?php
$text = 'Приклад текста з посиланнями: https://transoftgroup.com , а ось наприклад ссилка на укрнет - http://ukr.net чи ось на цю тему в офіційній документації - https://www.php.net/manual/ru/reference.pcre.pattern.syntax.php Ось так!';
$text = preg_replace("/(^|[\n ])([\w]*?)((ht|f)tp(s)?:\/\/[\w]+[^ \,\"\n\r\t<]*[^ \.])/is", "$1$2<a href=\"$3\" >$3</a>", $text);
echo $text;
