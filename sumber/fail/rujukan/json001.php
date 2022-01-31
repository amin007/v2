<?php
$a = array('<foo>',"'bar'",'"baz"','&blong&', "\xc3\xa9");

echo "<hr>Normal: ",  json_encode($a), "\n";
echo "<hr>Tags: ",    json_encode($a, JSON_HEX_TAG), "\n";
echo "<hr>Apos: ",    json_encode($a, JSON_HEX_APOS), "\n";
echo "<hr>Quot: ",    json_encode($a, JSON_HEX_QUOT), "\n";
echo "<hr>Amp: ",     json_encode($a, JSON_HEX_AMP), "\n";
echo "<hr>Unicode: ", json_encode($a, JSON_UNESCAPED_UNICODE), "\n";
echo "<hr>All: ",     json_encode($a, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE), "\n\n";

$b = array();

echo "<hr>Empty array output as array: ", json_encode($b), "\n";
echo "<hr>Empty array output as object: ", json_encode($b, JSON_FORCE_OBJECT), "\n\n";

$c = array(array(1,2,3));

echo "<hr>Non-associative array output as array: ", json_encode($c), "\n";
echo "<hr>Non-associative array output as object: ", json_encode($c, JSON_FORCE_OBJECT), "\n\n";

$d = array('foo' => 'bar', 'baz' => 'long');

echo "<hr>Associative array always output as object: ", json_encode($d), "\n";
echo "<hr>Associative array always output as object: ", json_encode($d, JSON_FORCE_OBJECT), "\n\n";
