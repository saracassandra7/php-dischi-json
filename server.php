<?php

//prendo il file json
$diskstring = file_get_contents('dischi.json');

//trasformo l'oggetto json in array associativo PHP
$disklist = json_decode($diskstring, true);

var_dump($disklist);

?>