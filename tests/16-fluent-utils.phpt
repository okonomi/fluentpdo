--TEST--
Basic operations
--FILE--
<?php
include_once __DIR__ . "/connect.inc.php";

use FluentPDO\FluentUtils;

echo "'" . FluentUtils::toUpperWords('one') . "'\n";
echo "'" . FluentUtils::toUpperWords(' one ') . "'\n";
echo "'" . FluentUtils::toUpperWords('oneTwo') . "'\n";
echo "'" . FluentUtils::toUpperWords('OneTwo') . "'\n";
echo "'" . FluentUtils::toUpperWords('oneTwoThree') . "'\n";
echo "'" . FluentUtils::toUpperWords(' oneTwoThree  ') . "'\n";

?>
--EXPECTF--
'ONE'
'ONE'
'ONE TWO'
'ONE TWO'
'ONE TWO THREE'
'ONE TWO THREE'
