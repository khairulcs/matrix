<?php
$nama = $_POST['nama'];
$filename ="excelreport.xls";
$path = 'excelreport.xls';

if(file_exists($path)):	
	$fh = fopen($filename, 'a') or die("can't open file");
	$contents = "$nama\n";
	fwrite($fh, $contents);
	fclose($fh);
	header("Location: processing.php");
else:

	echo 'does not exist';
endif;

?>