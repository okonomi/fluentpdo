--TEST--
Basic update
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";
/* @var $fpdo \FluentPDO\FluentPDO */

$query = $fpdo->update('article')->set('published_at', new \FluentPDO\FluentLiteral('NOW()'))->where('user_id', 1);
echo $query->getQuery() . "\n";
print_r($query->getParameters());
?>
--EXPECTF--
UPDATE article SET published_at = NOW()
WHERE user_id = ?
Array
(
    [0] => 1
)
