<?php 
 require './includes/connection.php';


if (!empty($_GET['file'])){
$fileName=basename($_GET['file']);
$path="./admin/uploads/".$fileName;
//echo "$path";
if (!empty($fileName) && file_exists($path)) {
	# define header
	header("Cache-Control: public");
	header("Content-Description: File Transfer");
	header("Content-Disposition: attachment;fileName=$fileName");
	header("Content-Type:application/zip");
	header("Content-Transfer-Encoding:binary");
	//read file
readfile($path);
exit;
}else{
	echo "file not excit";
}
}
  ?>