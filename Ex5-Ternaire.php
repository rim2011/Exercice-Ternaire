<?php
$misteryNumber=(rand(0,100));
$myNumber=(rand(0,100));
$var=($misteryNumber==$myNumber)? "Congratulations!":($misteryNumber>$myNumber)?  "+" : "-";
echo $var;
?>