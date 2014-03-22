--TEST--
aliases for clauses: group -> groupBy, order -> orderBy
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->from('article')->group('user_id')->order('id');
echo $query->getQuery() . "\n";
?>
--EXPECTF--
SELECT article.*
FROM article
GROUP BY user_id
ORDER BY id
