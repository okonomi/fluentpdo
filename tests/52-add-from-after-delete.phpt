--TEST--
add FROM after DELETE if doesn't set
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->delete('user', 1)->from('user');
echo $query->getQuery() . "\n";
print_r($query->getParameters());

?>
--EXPECTF--
DELETE user
FROM user
WHERE id = ?
Array
(
    [0] => 1
)
