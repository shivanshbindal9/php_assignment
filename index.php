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
<form action="validate.php" name="validation" method="post" onsubmit="checking()">
<table>
<tr>
<td>
Username:
</td>
<td>
<input type="text" value="username" required >
</td>
</tr>
<tr>
<td>
Password:
</td>
<td>
<input type="password" value="password" required>
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
