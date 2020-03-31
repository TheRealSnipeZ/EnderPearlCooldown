<?php

$output = "EnderPearlCooldown.phar";

if(is_file($output)) {
    unlink($output);
}

$phar = new Phar($output);
$phar->startBuffering();
$phar->buildFromDirectory(__DIR__);
$phar->stopBuffering();

echo "EnderPearlCooldown phar file has been built";
