<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>
PEOPLE SEARCH
</title>

<link href="main.css" rel="stylesheet" type="text/css">


</head>
<body>
<img style="margin-left:40%" src="./images/index.jpeg" width="220px" height="220px">
<br>
<fieldset>
<legend>SIGN IN </legend>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" name="myform" method="post"  onsubmit="checking()">
<table>
<tr>
<td>
Current Password
</td>
<td>
<input type="password" placeholder="username" name="user" required >
</td>
</tr>
<tr>
<td>
New  Password:
</td>
<td>
<input type="password" placeholder="password" name="pass" required>
</td>
</tr>
<tr>
<td>
Confirm Password:
</td>
<td>
<input type="password" placeholder="password" name="confirm" required>
</td>
</tr>

<tr>
<td>
<input type="submit" value="login" onsubmit="checking()">
</td>
</tr>
</table>
</form>
<body>
<script>
var c= 0, d= 0, e= 0, f= 0, g= 0, h= 0, i= 0;
function validate_form(){
    console.log("hello"); 
      var name = document.forms["myform"]["user"].value;
        var pass = document.forms["myform"]["pass"].value;
       //   var email = document.forms["myform"]["email"].value;
        var pass1 = document.forms["myform"]["confirm"].value;

}


</script>
<?php
include("config.php");
if(isset($_SESSION["username"])){
$ipass=md5($_POST['user']);
$pass=md5($_POST['pass']);
$cpass=md5($_POST['confirm']);
$sql = "SELECT password FROM shivansh_people where username= '".$_SESSION["username"]."';";

$result=$con->query($sql);
if($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          if($ipass==$row["password"])
          {
          if($pass==$cpass)
          {
            $sql1="update shivansh_people set password= '".$pass."' where username = '".$_SESSION["username"]."';";
            $result1=$con->query($sql1);

            echo "updated pass word";
            header("location:./profile.php");
          }
          
         echo "wrong match"; 
          }
          echo "dont mess with it";
    }}}
else

{

echo "you are logged out";
//echo "<form action='index.php'> <input type='submit' value='login in'></form> ";

}

?>
</html>

