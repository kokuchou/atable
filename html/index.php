<?php

require_once '../config/init.php';

$before = explode('/', $_SERVER["REQUEST_URI"]);
$after  = array();
$fileName = 'index';
$funcName = 'index';
$className = 'index';

foreach ($before as $value) {
    if (!empty($value) && !preg_match('/\./',$value)) {
        $after[] = $value;
    }
}

if (isset($after[0])) {
    $className = $after[0];
}

if (isset($after[1])) {
    $funcName = $after[1];
}

$fileName = APPS_DIR . $className . '.php';

if (file_exists($fileName)) {
    require_once $fileName;
    $class = new $className();

    call_user_func(array($class, $funcName));
} else {
    require_once APPS_DIR . 'index.php';
    $class = new index();
    call_user_func(array($class, 'index'));
}