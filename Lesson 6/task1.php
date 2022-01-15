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
        // тут в мене 3 хвилини назад, для наглядного прикладу
	    $upload_dir = "D://OpenServer//domains//localhost//tsg//Lesson 6//upload";
	    $backupDir = 'D://OpenServer//domains//localhost//tsg//Lesson 6//backup';
        if (isset($_FILES['filename'])) {
            $filename = $_FILES['filename']['name'];
            $tmp_filename = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp_filename, "$upload_dir/$filename");
        }
        
        if (!file_exists($backupDir)) {
            mkdir($backupDir);
        }
        $upload_files = scandir($upload_dir);
            foreach ($upload_files as $filename) {
                if ($filename !== "." && $filename !== ".." && date('r', filectime("$upload_dir/$filename")) < date('r', strtotime('-3 minutes'))) {
                    rename("$upload_dir/$filename", "$backupDir/$filename");
		        }
            }
	?>
</body>
</html>