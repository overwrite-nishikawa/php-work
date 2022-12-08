<?php
$a = 1;
$b = &$a;
$a++;
print $a;
print '<br />';
print $b;
   
$error = '';
print $error ?: '正常です';