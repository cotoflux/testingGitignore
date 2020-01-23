<?php 

include("ignore/secretInfo.php");
include("vendor/autoload.php");

$password = PASSWORD;  //defined in secretInfo.php
$username = USERNAME;

echo("<h1>Testing .gitignore</h1><hr>");
echo("<h3>".$password."</h3><br>");
echo("<h3>".$username."</h3>");