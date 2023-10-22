<?php
$string = "Mohammed Alhojaily";
echo $string;
echo "<br>";
echo strtolower($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strlen($string);
echo "<br>";
echo $string[0];
echo "<br>";
$string[18] = "i";
echo $string;
echo "<br>";
echo str_replace("Mohammed", "Abdullah", $string);
echo "<br>";
echo substr($string, 9, 9);
?>