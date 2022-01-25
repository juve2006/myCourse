<?php
class File
{
/*$upload_dir = "D://OpenServer//domains//localhost//tsg//Lesson 6//upload";
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
            }*/
	protected  $uploadDir ;
	
	protected  $backupDir;
	
	



}