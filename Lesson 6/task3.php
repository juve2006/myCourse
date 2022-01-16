<html lang="">
<head>
    <title>Форма завантаження файла</title>
    <meta charset="UTF-8">
    </head>
<body>
    
    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" >
        Завантажити файл: <br><br>
        <input name="filename" type="file" ><br><br>
        <input type="submit" value="Завантажити" ><br><br>
    </form>
    
    <?php
    //$upload_dir = "C:/Users/mykhailo.pivkach/Documents/NetBeansProjects/unit6_upload/upload";
	$upload_dir = "D://OpenServer//domains//localhost//tsg//Lesson 6//upload";
	$source = 'D://OpenServer//domains//localhost//tsg//Lesson 6//upload//source.txt';
	$dest = 'D://OpenServer//domains//localhost//tsg//Lesson 6//upload//dest.txt';
     
	    if (isset($_FILES['filename'])) {
            $filename = $_FILES['filename']['name'];
            $tmp_filename = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp_filename, "$upload_dir/$filename");
        }
	    
    
    $content=file_get_contents($source); // зчитуємо контент файлу source.txt
    $revContent=reverseText($content); // робимо реверс контенту за допомогою fn
	file_put_contents($dest, $revContent);
	
	/*$fp=fopen($dest, 'w+');
    fwrite($fp, $revContent); // можна замінити на file_put_contents і навіть можливо краще
    fclose($fp);*/
    
    function reverseText ($text) {
        $words = preg_split('/\s/', $text);
        foreach ($words as $word){
            $text = str_replace ($word, strrev($word), $text);
        }
        return $text;
    }
    ?>
</body>
</html>