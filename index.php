<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="style.css"/>
    <noscript>Javascript required for login</noscript>
</head>
<body>
  <div id="div_login">
    <form action="process_login.php" method="POST">
      Username:<input type = "text" name="username"/>
      Password:<input type="password" name= "password" />
      <input type="submit" value="->">
    </form>
  </div>

  <div id="div_sign">
    <form action="sign_form.php" method="POST">
      Not a member yet? Join us :<input type="submit" value="Sign Up">
    </form>
  </div>

</html>
