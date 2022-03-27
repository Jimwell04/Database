<?php 

$dir = "txt";
$files = scandir($dir);

foreach($files as $file) {
  
  if (($file != ".") && ($file != "..") && ($file != ".svn") && ($file != ".htacces")) {
    
    echo file_get_contents("txt/$file");
    
  }
  
}

?>
