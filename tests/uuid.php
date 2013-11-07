<?php

if (!extension_loaded('uuid')) {
    exit("uuid extension not loaded");
}

$module = 'uuid';
$functions = get_extension_funcs($module);

echo "Functions available in the uuid extension:\n";

foreach ($functions as $func) {
    echo "$func\n";
}

echo "\nConstants defined:\n";

$consts = get_defined_constants(true);

print_r($consts['uuid']);

$uuid = uuid_create(UUID_TYPE_RANDOM);

echo "$uuid\n";
