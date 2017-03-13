<?php

/**
 * test bot
 */

require_once '../stores/simple_disk.php';

while(true) {
    $node = store_get();

    print_r($node);

    //exit;

    sleep(5);
}
