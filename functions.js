function alertMe()
{
  var data = document.getElementById('usr_data');

  var databaseRef = firebase.database();
  databaseRef.ref("Aditya").set("This is my name");
}
