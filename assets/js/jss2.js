function validateForm()

{

 

var x = document.registration.uname.value;
 if (x == "") {

 alert("Name must be filled out");

 return false;

 }

if(x!= "studentit"){
 alert("Incorrect Name ");

 return false;

 }


var y = document.registration.psw.value;

if (y == ""){

 alert("Password must be filled out");

 return false;

 }

 if(y!="Student_Engineer"){
 alert("Incorrect Password ");

 return false;

 }
 }