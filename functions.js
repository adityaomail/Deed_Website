//login button function

function login_details(div0_detail,div1_detail)
{
  //username text field
  var u_name = document.createElement("input");
  u_name.type = "text";
  u_name.id = "u_name";
  u_name.defaultValue="Your username here";
  document.getElementById(div0_detail).appendChild(u_name);
  //password text field
  var u_pass = document.createElement("input");
  u_pass.type = "password";
  u_pass.id = "u_pass";
  document.getElementById(div1_detail).appendChild(u_pass);
  //make button invisible when login is clicked
  var button = document.getElementById("button_login");
  button.outerHTML = "";
  delete button;
}


//Sign in button function

function sign_details(div0_detail,div1_detail,div2_detail,div3_detail)
{
  //username text field
  var u_name = document.createElement("input");
  u_name.type = "text";
  u_name.id = "u_name";
  u_name.defaultValue="Your username here";
  document.getElementById(div0_detail).appendChild(u_name);
  //password text field
  var u_pass = document.createElement("input");
  u_pass.type = "password";
  u_pass.id = "u_pass";
  document.getElementById(div1_detail).appendChild(u_pass);
  //name text field
  var u_fname = document.createElement("input");
  u_fname.type = "text";
  u_fname.id = "u_fname";
  document.getElementById(div2_detail).appendChild(u_fname);
 //email text field
  var u_email = document.createElement("input");
  u_email.type = "email";
  u_email.id = "u_email";
  document.getElementById(div3_detail).appendChild(u_email);
  //make button invisible when login is clicked
  var button = document.getElementById("button_sign");
  button.outerHTML = "";
  delete button;
}
