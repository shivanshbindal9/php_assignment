<!DOCTYPE html>
<html>
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" href="login.css"  content="width=device-width, initial-scale=1.0">

</head>
<body>
<div class="login_page">
<img style="margin-left:40%" src="./images/index.jpeg" width="220px" height="220px">

<fieldset>
<legend> SIGN UP </legend>
<form name="myform" method="POST" id="form_id" action="#" onsubmit="validate_form()"  >

<table>


<tr>
<th><label for="user">username</label></th>
<td><input type="text" id="user" name="user" onBlur=" check() " required /></td>
<td><p id="error_user"></p><span id="user-availability-status"> hello </span>
</td>
</tr>


<tr>
<th><label for="edu">Qualifications</label></th>
<td><select id="edu" name="edu">
<option value="BTech">B.Tech</option>
<option value="MTech">M.Tech</option>
<option value="PHd">P.Hd</option>
<option value="other">other</option>

</select></td>
<td><p id="error_quali"></p>
</td>
</tr>

<tr>
<th><label for="number">Mobile No.</label></th>
<td><input type="number" id="number" name="number" required /></td>
<td>
<p id="error_num"></p>
</td>

</tr>


<tr>
<th><label for="email">Email</label></th>
<td><input type="text" id="email" name="email" required /></td>
<td>
<p id="error_email"></p>
</td>

</tr>



<tr>
<th><label for="age">Age</label></th>
<td><input type="number" id="age" name="age" required /></td>
<td>
<p id="error_age"></p>
</td>

</tr>



<tr>
<th><label for="password">Password</label></th>
<td><input type="password" id="password" name="password" required/></td>
<td>
<p id="error_password"></p>
</td>

</tr>



<tr>
<th><label for="confirm">Confirm Password</label></th>
<td><input type="password" id="confirm" name="confirm" required /></td>
<td>
<p id="error_confpass"></p>
</td>

</tr>


<tr>
<th><label for="city">City</label></th>
<td><input type="text" id="city" name="city" required /></td>
<td>
<p id="error_city"></p>
</td>

</tr>



</table>
<!--<input type="submit" value="Submit" onsubmit="validate_form()" />-->
<input type="button" value="submit" onclick="validate_form()" />
<div id="warning"></div>

</form>
</fieldset>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js">
</script>
<script>
function check() {
  // $("#loaderIcon").show();
  console.log("shi");
  jQuery.ajax({
url:"check_avialability.php",
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
  console.log("hello"); 
  var name = document.forms["myform"]["user"].value;
  var pass = document.forms["myform"]["password"].value;
  var email = document.forms["myform"]["email"].value;
  var pass1 = document.forms["myform"]["confirm"].value;
  var quali = document.forms["myform"]["edu"].value;
  var number = document.forms["myform"]["number"].value;
  var age = document.forms["myform"]["age"].value;
  var city = document.forms["myform"]["city"].value;


  if(c>=2||d>=2||e>=2
<div class="login_page">
<img style="margin-left:40%" src="./images/index.jpeg" width="220px" height="220px">

<fieldset>
<legend> SIGN UP </legend>
<form name="myform" method="POST" id="form_id" action="#" onsubmit="validate_form()"  >

<table>


<tr>
<th><label for="user">username</label></th>
<td><input type="text" id="user" name="user" onBlur=" check() " required /></td>
<td><p id="error_user"></p><span id="user-availability-status"> hello </span>
</td>
</tr>


<tr>||f>=2||g>=2||h>=2||i>=2){
    document.getElementById('warning').innerHTML="Don't mess with me by submitting wrong information";
  }
  var alphabets = /^[a-zA-Z0-9]+$/; //cannot contain special characters
  if(name.match(alphabets))
  {
    document.getElementById('error_user').innerHTML="";
    c = 0;
  }
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
    g++;

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

  }if(c==0&&d==0&&e==0&&f==0&&g==0&&h==0&&i==0){
    document.getElementById('warning').innerHTML="";
    document.getElementById("form_id").submit();
  }

}



</script>

</body>
</html>


<?php
include("config.php");
if ($con->connect_error)
{
  echo "Failed to connect to MySQL: " . $con->connect_error;
}
else
echo "connected <br>";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //echo "abcdef";

  $name1 = $_POST["user"];
  $num1 = $_POST["number"];
  $email1 = $_POST["email"];
  $age1 = $_POST["age"];
  $pass1 = $_POST["password"];
  $confirm1 = $_POST["confirm"];
  $city1 = $_POST["city"];

  if (preg_match("/^[a-zA-Z0-9]*$/",$name1)) {
    //  if(preg_match("/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/",$number1)){
    if(preg_match("/^[^@]+@[^@.]+\.[a-z]+$/i",$email1)){
      if(preg_match("/^[A-Za-z]*$/",$city1)){
        if($pass1==$confirm1){
          echo "cool"."<br>";

          $user2 = mysqli_real_escape_string($con, $_POST['user']);
          $pass2 =md5(mysqli_real_escape_string($con, $_POST['password']));
          $email2= mysqli_real_escape_string($con, $_POST['email']);
          $num2=mysqli_real_escape_string($con, $_POST['number']);
          $city2=mysqli_real_escape_string($con, $_POST['city']);
          
          $query = "INSERT INTO shivansh_people(username,password,email,mobile,city)";
          $query .= " VALUES ('$user2', '$pass2','$email2','$num2','$city2')";


           $reuslt1=$con->query($query);
echo "<script> window.location.assign('profile.php'); </script>";
//header("location:./profile.php");
        } else echo "your password do not match";
      } else echo "incorrect city <br>";
    } else echo "incorrect email <br>";
    // } else echo"incorrect no";
  } else echo "incorrect name <br>";




  echo "cool!!!";
}

else {
  echo "get request";
}

?>
