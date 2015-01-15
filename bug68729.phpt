--TEST--
bug #68729
--FILE--
<?php echo urlencode("http://testing.com? some=test");?>
--EXPECT--
http%3A%2F%2Ftesting.com%3F%20some%3Dtest
