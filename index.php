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
<form action="<?php echo $_SERVER["PHP_SELF"];?>" name="validation" method="post"  onsubmit="checking()">
<table>
<tr>
<td>
Username:
</td>
<td>
<input type="text" placeholder="username" name="user" required >
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" placeholder="password" name="pass" required>
</td>
</tr>
<tr>
<td>
<input type="submit" value="login" onsubmit="checking()">
</td>

</tr>
</table>
</form>
</fieldset>
<script type="text/javascript">
var mail = /^[^@]+@[^@.]+\.[a-z]+$/i;
function checking(){
  alert("want to remember it");}
</script>
</body>
</html>
<?php
$con =new  mysqli("192.168.121.187","first_year","first_year","first_year_db");

// Check connection
if ($con->connect_error)
    {
        echo "Failed to connect to MySQL: " . $con->connect_error;
          }
echo "connected";
 $sql = "SELECT username,password FROM shivansh_people";
 $usern = $_POST['user'];
 $passw = $_POST['pass'];
 echo $usern;
 $result=$con->query($sql);
if($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                if($usern==$row["username"]&&$passw==$row["password"])
                  echo "hello";
                
                    }
                    } else {
                        echo "0 results";
                        }
                       // $con->close();
?> 
