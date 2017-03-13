<?php

/**
 * Simple store, uses disk to store and retrieve nodes
 * To be used by a php based bot running on GNU/Linux
 */

const CWM_NODE_PATH = '/var/local/oventi/chat_with_me';

if(!is_dir(CWM_NODE_PATH)) {
    echo "Path " . CWM_NODE_PATH . " does not exist\n";
    exit(1);
}

function store_get() {
    foreach (new DirectoryIterator(CWM_NODE_PATH) as $fileInfo) {
        $first_character = substr($fileInfo->getFilename(), 0, 1);
        if($fileInfo->isDot() || $first_character === '.') continue;

        $file_path = CWM_NODE_PATH . '/' . $fileInfo->getFilename();
        $file_data = file($file_path);

        //rename($file_path, CWM_NODE_PATH . '/.' . $fileInfo->getFilename());

        return $file_data;
    }

    return null;
}

function store_put() {

}
