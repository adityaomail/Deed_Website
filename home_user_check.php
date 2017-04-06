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
  //This is the home for user.

    $url = "https://localhost/Deed_Website/home_user.php";
    header('Location:'.$url);
    die();
  //testing:echo $_SESSION["username"];
  //testing:echo $_SESSION["password"];


}



if($_SESSION["username"]=="" || $_SESSION["password"]=="")
{
  $url = "https://localhost/Deed_Website/index.php";
  header('Location:'.$url);
  die();
  //echo "You need to login again";
}

?>


<form action="temp_destroy_session.php" method="post">
  <input type = "submit" value="Logout"/>
</body>

</html>
