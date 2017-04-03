<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>

</head>
<body>

<?php

session_start();

if(isset($_SESSION["username"]) || isset($_SESSION["password"]))
{
  echo "Welcome";
  echo $_SESSION["username"];
  echo $_SESSION["password"];

}



if($_SESSION["username"]=="" || $_SESSION["password"]=="")
{
  $url = "https://www.google.com";
  header('Location:'.$url);
  die();
  //echo "You need to login again";
}

?>


<form action="temp_destroy_session.php" method="post">
  <input type = "submit" value="submit"/>
</body>

</html>
