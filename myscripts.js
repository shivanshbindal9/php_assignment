
function check() {
  // $("#loaderIcon").show();
  console.log("shi");
  jQuery.ajax({
      console.log("hell");
url: "check_availability.php",
data:'username='+$("#user").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
//$("#loaderIcon").hide();
},
error:function (){}
});
}



var c= 0, d= 0, e= 0, f= 0, g= 0, h= 0, i= 0;
function validate_form(){
  var name = document.forms["myform"]["user"].value;
  var pass = document.forms["myform"]["password"].value;
  var email = document.forms["myform"]["email"].value;
  var pass1 = document.forms["myform"]["confirm"].value;
  var quali = document.forms["myform"]["edu"].value;
  var number = document.forms["myform"]["number"].value;
  var age = document.forms["myform"]["age"].value;
  var city = document.forms["myform"]["city"].value;

  //Warning Labels
  if(c==0||d==0||e==0||f==0||g==0||h==0||i==0){
    document.getElementById('warning').innerHTML="";
  }
  if(c>=2||d>=2||e>=2||f>=2||g>=2||h>=2||i>=2){
    document.getElementById('warning').innerHTML="Don't mess with me by submitting wrong information";
  }
  var alphabets = /^[a-zA-Z0-9]+$/; //cannot contain special characters
  if(name.match(alphabets))
  {
    document.getElementById('error_user').innerHTML="";
    c = 0;}
  else
  {
    document.getElementById('error_user').innerHTML="*Please enter valid username";
    c++;
  }
  if(pass.length<7){
    document.getElementById('error_password').innerHTML="*Please enter a password of length more than 7";
    d++;

  }
  else{
    document.getElementById('error_password').innerHTML="";
    d = 0;
  }
  if(pass!=pass1){
    document.getElementById('error_confpass').innerHTML="*Password didnot match...XD*";
    e++;

  }
  else{
    document.getElementById('error_confpass').innerHTML="";
    e = 0;
  }
  var mail = /^[^@]+@[^@.]+\.[a-z]+$/i;
  if(email.match(mail))
  {
    document.getElementById('error_email').innerHTML="";
    f = 0;
  }
  else
  {
    document.getElementById('error_email').innerHTML="*Did you just make up that email... :(  *";
    f++;

  }
  var agematch = /^[0-9]+$/;

  if(age<5||age>150){
    document.getElementById('error_age').innerHTML="*Too old or too younger *";
  }
  else if(age.match(agematch))
  {
    document.getElementById('error_age').innerHTML="";
    g = 0;
  }
  var alpha = /^[A-Za-z]+$/;
  if(city.match(alpha))
  {
    document.getElementById('error_city').innerHTML="";
    h = 0;
  }
  else
  {
    document.getElementById('error_city').innerHTML="*Enter a valid city*";
    h++;

  }
  var mob = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  ;
  if(number.match(mob))
  {
    document.getElementById('error_num').innerHTML="";
    i = 0;

  }
  else
  {
    document.getElementById('error_num').innerHTML="*Enter a valid phone number*";
    i++;

  }
}


