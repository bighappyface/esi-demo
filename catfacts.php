<?php
$catFact = json_decode(file_get_contents('http://catfacts-api.appspot.com/api/facts'));
echo $catFact->facts[0];
