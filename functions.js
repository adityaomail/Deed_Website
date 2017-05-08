var databaseRef = firebase.database();

function alertMe()
{
  var data = document.getElementById('usr_data');


  databaseRef.ref("Aditya").set("This is my name");
}

function registerUser(){
  var firebaseAuth = firebase.auth();
  var email = document.getElementById('email').value;
  var password = document.getElementById('password').value;
  var errcode;
  var errMessage;
  if(firebaseAuth.createUserWithEmailAndPassword(email, password).catch(function(error){
       errcode = error.code;
       errMessage = error.meassage;
  })){alert("Successfull");

  //if successfull then regsiter all the user details in database

  databaseRef.ref()


}
  else {
    alert(errMessage);
  }





}
