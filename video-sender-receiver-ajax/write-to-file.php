<?php

$file = $_GET["file"];
$content = file_get_contents("php://input");

var_dump($file);
var_dump($content);

file_put_contents($file, $content); exit;
