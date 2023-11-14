<?php

declare(strict_types=1);

foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . '*.php') as $filename) {
    if (basename($filename) !== 'autoload.php') {
        include_once $filename;
    }
}
