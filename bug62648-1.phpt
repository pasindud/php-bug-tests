--TEST--
Bug #68728
--FILE--
<?php

echo similar_text("test","wert");
echo "|";
echo similar_text("wert","test");

?>
--EXPECT--
2|2
