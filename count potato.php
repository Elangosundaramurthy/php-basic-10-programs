<?php
$sentence = "potato potato potato potato potato";
$Count = substr_count(strtolower($sentence), 'potato');
echo "The word 'potato' appears $Count times.";
?>