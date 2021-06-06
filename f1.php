<?php

// user sent a GET header with key = secret_access, val = true, so

echo $_GET["secret_access"]; // output: true
echo $secret_access; // output:

session_start();

// in previous logic, you set session variable $secret_access = false

echo $_SESSION["secret_access"]; // output: false
echo $secret_access; // output: false

extract_globals();  // Globals put into "normal" variables

echo $_GET["secret_access"]; // output: true
echo $_SESSION["secret_access"]; // output: false
echo $secret_access; // output: true

// VARIABLES ARE COMPROMISED!
// DO NOT USE $secret_access !
// USE $_SESSION["secret_access"] instead !!!

?>
