<?php
include_once("Classes/DBController.php");
include_once("Classes/PetOwner.php");
echo("<h1>there is only east</h1>");
$output = DBController::isUser(NULL,'');
$shoutput = $output ? 'true' : 'false';
echo($shoutput);
$output = DBController::isUser('example5','password');
$shoutput = $output ? 'true' : 'false';
echo($shoutput);
$output = DBController::isUser('exampl5','password');
$shoutput = $output ? 'true' : 'false';
echo($shoutput);
$owner = DBController::getPetOwner('example5','password');
$ouput = $owner->getID();
echo(strval($ouput));
DBController::pet5pic();
?>