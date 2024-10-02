<h3>operadores aritmeticos</h3>
<?php
$a = 8;
$b = 3;
echo $a + $b, "<br>";
echo $a - $b, "<br>";
echo $a * $b, "<br>";
echo $a / $b, "<br>";
$a++ ;
echo $a, "<br>";
$b-- ;
echo $b, "<br>";
?>
<h3>operadores de compiladores</h3>
<?php
$a = 8;
$b = 3;
$c = 3;
echo $a == $b, "<br>", "false";
echo $a != $b, "<br>", "true";
echo $a < $b, "<br>", "true";
echo $a > $b, "<br>", "true";
echo $a >= $b, "<br>", "true";
echo $a <= $b, "<br>", "true";
?>
<h3>operadores logicos</h3>
<?php
$a = 8;
$b = 3;
$c = 3;
echo ($a == $b) && ($c>$b), "<br>";
echo ($a == $b) || ($b==$c), "<br>";
echo !($b <= $c), "<br>";
?>