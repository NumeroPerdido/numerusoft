<?php

$data = substr($_POST['imgurl'], strpos($_POST['imgurl'], ",") + 1);
$decodedData = base64_decode($data);
$fp = fopen("canvas.png", 'wb');
fwrite($fp, $decodedData);
fclose($fp);
echo"cê é o asdas mesmo";
?>