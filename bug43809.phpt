--TEST--
Bug #68728
--FILE--
<?php

$something=strtok('something',':');
var_dump($something);

?>
--EXPECT--
bool(false)
