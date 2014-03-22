--TEST--
Basic delete
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->deleteFrom('user')
    ->ignore()
    ->where('id', 1);

echo $query->getQuery() . "\n";
print_r($query->getParameters());
?>
--EXPECTF--
DELETE IGNORE
FROM user
WHERE id = ?
Array
(
    [0] => 1
)
