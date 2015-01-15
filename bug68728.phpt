--TEST--
Bug #68728
--FILE--
<?php echo htmlentities("\" <>?&/", ENT_HTML5);?>  
--EXPECT--
&quot;&nbsp;&lt;&gt;&quest;&amp;&sol;
