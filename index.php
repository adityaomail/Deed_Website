<<<<<<< HEAD
<html>
<head>
  <title>Home</title>
    <script src="functions.js"></script>
    <link rel="stylesheet" href="style.css">
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

  </div>
=======
<!DOCTYPE HTML>
<html>
<head>
  <title>Home</title>
  <script src="functions.js"></script>
  <noscript>javascript needed</noscript>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div>
  <span><input type="button" onclick="javascript:login_details('u_here','pass_here')" value="Login" id="button_login"/></span>
  <span><input type="button" onclick="javascript:sign_details('u_here','pass_here','name_here','phone_here')" value="Sign in" id="button_sign"/></span>

 </div>

  <div id="u_here"></div>

  <div id="pass_here"></div>

  <div id="name_here"></div>

  <div id="phone_here"></div>


>>>>>>> b816f3a742a7d3654a4865694a616844ab359951
</body>
</html>
