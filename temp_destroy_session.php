<?php

//This will be required for logout

echo "This will destroy the session\n";
session_start();
session_destroy();
echo "Session Destroyed!!";

?>
