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

//saving all details on submit to database
//$sql = "INSERT INTO user_info (username, password, name, id, phone, email, pin, local_area, extra) VALUES (".$_POST[username].",".$_POST[password]",".$_POST[name].", '124Aditya322',".$_POST[phone].","$_POST[email].",".$_POST[pin].",".$_POST[address].","."NULL)";
$sql = "insert into user_info(username,id) values('jhon123',15154)";
echo $sql;

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
 ?>
