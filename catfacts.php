<?php
$catFact = json_decode(file_get_contents('http://catfacts-api.appspot.com/api/facts'));
$maxFact = ($catFact->facts)--;
echo $catFact->facts[rand(0,$maxFact)];
