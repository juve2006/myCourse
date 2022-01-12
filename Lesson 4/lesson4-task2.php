<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>
<?php
const M = 4;
const N = 5;
for ($i = 0; $i < M; $i++) {
    for ($j=0; $j <N; $j++) {
            $arr[$i][$j]=rand();
    }
}
?>
<table >
    <?php foreach ($arr as $items): ?>
        <tr>
            <?php foreach ($items as $row): ?>
                <td style="padding: 5px; border: 1px solid black"> <?php echo $row; ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
