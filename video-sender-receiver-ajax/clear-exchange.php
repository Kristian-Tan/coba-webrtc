<?php
$glob = glob("*.exchange.txt");
foreach ($glob as $key => $value) {
    unlink($value);
}
