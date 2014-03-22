--TEST--
FROM table from other database
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->from('db2.user')->order('db2.user.name')->getQuery();
echo "$query\n";

?>
--EXPECTF--
SELECT db2.user.*
FROM db2.user
ORDER BY db2.user.name
