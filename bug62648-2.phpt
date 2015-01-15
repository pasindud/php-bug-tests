--TEST--
Bug #68728
--FILE--
<?php

$s1 = 'biocompatibilitystudiesofironoxidedextrinthinfilmsbacdetundgakslfnnd';
$s2 = 'studyofironoxidenanoparticlescoatedwithdextrinobtainedbybcgagsfddteuhdgavdjfkdbey';

echo similar_text($s1, $s2);
echo ",";
echo similar_text($s2, $s1);

?>
--EXPECT--
35,35
