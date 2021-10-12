<?php

$file = $_GET["file"];
//echo shell_exec("tac ".$file." | head -n2");
echo file_get_contents($file);
