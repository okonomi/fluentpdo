--TEST--
Basic delete
--FILE--
<?php
include_once dirname(__FILE__) . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->deleteFrom('user')
    ->where('id', 1);

echo $query->getQuery() . "\n";
print_r($query->getParameters());
?>
--EXPECTF--
DELETE
FROM user
WHERE id = ?
Array
(
    [0] => 1
)
