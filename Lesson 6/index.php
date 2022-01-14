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
        $upload_dir = "C://Users//User//PhpstormProjects//tsg//Lesson 6//upload";
       // $upload_dir = "upload";
        if (isset($_FILES['filename'])) {
            $filename = $_FILES['filename']['name'];
            $tmp_filename = $_FILES['filename']['tmp_name'];
            move_uploaded_file($tmp_filename, "$upload_dir/$filename");
        }

       $upload_files = scandir($upload_dir);
        //var_dump( $upload_dir);
       // var_dump($_FILES);
        //var_dump($upload_files);
        //var_dump($filename);
        //Скопіюйте у директорію upload проекту більше файлів так щоб були файли за різні дати.
    // Модифікуйте скрипт так, щоб він перевіряв чи існує, і якщо ні, то створював каталог backup.
    // Допишіть код, який буде усі файли, створені раніше ніж 3 дні назад переміщвати у папку backup.
                
      /*  foreach ($upload_files as $filename) {
            if($filename !== "." && $filename !== ".." && getimagesize("$upload_dir/$filename") > 0) {
                //echo '<img src="' . "$upload_dir/$filename" . '">';
               // echo date('r',filectime("$upload_dir/$filename"));
            } 
        }*/

    $backupDir = 'C://Users//User//PhpstormProjects//tsg//Lesson 6//backup';
            if (!file_exists($backupDir)) {
                mkdir($backupDir);
            }
            foreach ($upload_files as $filename){
               if ($filename !== "." && $filename !== ".." && getimagesize("$upload_dir/$filename") > 0) {
                   $time =date('r',filectime("$upload_dir/$filename"));
                   echo $time;
                }
        }

   // var_dump(filectime($filename));
    ?>

</body>
</html>