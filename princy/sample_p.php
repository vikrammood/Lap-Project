<?php
$dir = "../uploads";
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){ 
	    //loop through the files, skipping . and .., and recursing if necessary
      if($file != "." && $file != ".."){
            echo "<a href='../uploads/" . $file . "' download>" . $file . "</a><br>";
        }
    }
    closedir($dh);
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<style>
a{
	text-decoration: none;
	color: blue;
}
a:hover{
	text-decoration: underline;
}
</style>
</head>
<body>
</body>
</html>
