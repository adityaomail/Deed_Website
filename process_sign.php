<html>
<head></head>
<title>Sign In</title>

<?php

$server = 'localhost';
$username='root';
$password='Aditya24';

//establishing connection with server
$con = mysqli_connect($server,$username,$password);


if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

//establishing connection with database
$database = "Deed_database" ;
$is_connected= mysqli_select_db($con,$database);
if(true==$is_connected)
{
  echo "connected to database \n";
}
else {
  echo "not connected to database";
}

//querying database

$sql = "select * from user_info";

$sql_result = mysqli_query($con,$sql);
$_row;
while ($_row = mysqli_fetch_object($sql_result))
{
  echo $_POST[username];
  echo $_POST[password];
  echo $_row->username;
  echo $_row->password;

  if($_POST[username]==$_row->username && $_POST[password]==$_row->password)
        {
          echo "Login Successfull";
          $url = "https://www.google.com";
          header('Location:'.$url);
          die();
        }
  else {
    echo "login failed";
    $url = "http://localhost/Website/index.php";
    header('Location:'.$url);
    die();

  }
}



?>
</html>
