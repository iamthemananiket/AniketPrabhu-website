<?php
$myfile = fopen("formdata.txt", "a") or die("Unable to open file!");
$txt = $_POST['name'] . ' ' . $_POST['phone'] . ' ' . $_POST['email'] . ' ' . $_POST['message'] . "\r\n";
fwrite($myfile, $txt);
fclose($myfile);
//file_put_contents("formdata.txt", $_POST['name'] . ' ' . $_POST['phone'] . ' ' . $_POST['email'] . ' ' . $_POST['message'] . "\n", FILE_APPEND);
?>