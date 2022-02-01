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
	class File
	{
		protected string $uploadDir;
		
		protected string $backupDir;
        
        protected string $source;
		
		public function uploadFiles() // після визову метода можемо завантажувати наші файли в папку upload
		{
			if (isset($_FILES['filename'])) {
				$filename = $_FILES['filename']['name'];
				$tmp_filename = $_FILES['filename']['tmp_name'];
				move_uploaded_file($tmp_filename, "$this->uploadDir/$filename");
			}
		}
        
        private function reverseText(string $text): string
        {
	        $words = mb_split('[ \t\v\r\n\f]', $text);
	        foreach ($words as $word){
		        $text = str_replace ($word, $this->mb_strrev($word), $text);
	        }
	        return $text;
        }
        
		private function mb_strrev(string $str): string
		{
			$r = '';
			for ($i = mb_strlen($str); $i >= 0; $i--) {
				$r .= mb_substr($str, $i, 1);
			}
			return $r;
		}
  
		public function setUploadDir($path): string //ініціалізація шляху папки
		{
			return $this->uploadDir = $path;
		}
		
		public function setBackupDir($path): string //ініціалізація шляху папки
		{
			return $this->backupDir = $path;
		}
				
        public function createBackupDir() // створюємо папку backup task 7.1.1
        {
	        if (!file_exists($this->backupDir)) {
		        mkdir($this->backupDir);
	        }
        }
        
        public function backupFiles() //бекап файлів upload --> backup task 7.1.1
        {
	        $uploadFiles = scandir($this->uploadDir);
	        foreach ($uploadFiles as $filename) {
		        if ($filename !== "." && $filename !== ".." && date('r', filectime("$this->uploadDir/$filename")) < date('r', strtotime('-3 minutes'))) {
			        rename("$this->uploadDir/$filename", "$this->backupDir/$filename");
		        }
	        }
        }
		
		public function removeWordTestInTxtFiles() //task 7.1.2
		{
			$txtFiles = [];
			foreach (glob($this->uploadDir.'/*.txt', GLOB_MARK) as $file) {
				$txtFiles[] = $file;
			}
			foreach ($txtFiles as $txtfile) {
				if (mb_strpos(file_get_contents($txtfile), 'тест')!==false) {
					unlink ($txtfile);
				}
			}
        }
        
        public function reverse() // task 7.1.3
        {
            $this->source = 'D://OpenServer//domains//localhost//tsg//Lesson 7//upload//source.txt';
	        $content = file_get_contents($this->source); // зчитуємо контент файлу source.txt
	        $revContent = $this->reverseText($content); // робимо реверс контенту за допомогою fn
	        $dest = 'D://OpenServer//domains//localhost//tsg//Lesson 7//upload//dest.txt';
	        file_put_contents($dest, $revContent);
         
        }
	}
	$file = new File();
 
	$file->setUploadDir("D://OpenServer//domains//localhost//tsg//Lesson 7//upload");
	$file->setBackupDir("D://OpenServer//domains//localhost//tsg//Lesson 7//backup");
	$file->uploadFiles();
    $file->createBackupDir();
    $file->backupFiles();
    $file->removeWordTestInTxtFiles();
    $file->reverse();
?>
</body>
</html>

