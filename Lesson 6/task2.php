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
        if (isset($_FILES['filename'])) {
            $filename = $_FILES['filename']['name'];
            $tmp_filename = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp_filename, "$upload_dir/$filename");
        }
	
        $txtFiles = [];
        foreach (glob($upload_dir.'/*.txt', GLOB_MARK) as $file) {
	        $txtFiles[] = $file;
        }
        
       
        foreach ($txtFiles as $txtfile) {
            if (mb_strpos(file_get_contents($txtfile), 'тест')!==false) {
	            unlink ($txtfile);
            }
        }
    ?>
</body>
</html>