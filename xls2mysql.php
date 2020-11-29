<?php

use Importer\Importer;
require_once 'src/vendor/autoload.php';
$config = include 'config.php';
$importer = new Importer($config);
$importer->file = 'XlsFiles/test.xls';
$importer->table = 'heavy_metal';
$importer->fields = [
    'category', 'steel', 'steel_size', 'qty'
];
$importer->import();
$result = $importer->result;
print_r($result);

echo "Успешно са импортирани {$result['imported_rows']} от {$result['read_rows']} прочетени !";
