<?php

require_once 'src/vendor/autoload.php';
$config = include_once 'config.php';

$file = 'XlsFiles/test.xls';
$table = 'heavy_metal';
$fields = [
    'category', 'steel', 'steel_size', 'qty'
];
$result = xls2mysql($config, $file, $table, $fields);
echo "Успешно са импортирани {$result['imported_rows']} от {$result['read_rows']} прочетени !";
