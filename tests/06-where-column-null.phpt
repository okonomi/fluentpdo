--TEST--
where('column', null)
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->from('user')->where('type', null);

echo $query->getQuery() . "\n";
?>
--EXPECTF--
SELECT user.*
FROM user
WHERE type is NULL
