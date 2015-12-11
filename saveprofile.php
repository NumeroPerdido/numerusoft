<?php
$url = $_POST["img"];
$data = file_get_contents($url);
$fileName = 'profile/'.$_POST["id"].'.jpg';
$file = fopen($fileName, 'w+');
fputs($file, $data);
fclose($file);
?>