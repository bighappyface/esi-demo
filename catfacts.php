<?php
$catFact = json_decode(file_get_contents('catfacts.json'));
$maxFact = count($catFact->facts);
echo $catFact->facts[rand(0,--$maxFact)];
