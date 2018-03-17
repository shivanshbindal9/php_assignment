<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>
feed page
</title>
<style>
#prof{
  z-index:-1;
}
#prof1{
}

</style>
</title>
</head>
<body>


<?php
//session_start();

if(!isset($_SESSION["username"])){
  echo "you are logged out";

}
else
{
include("config.php");
if (isset($_SESSION["username"]))
echo "<p> my name is </p>".$_SESSION["username"];

?>
<img id="prof" src="./uploads/<?php include ("config.php");
$sql1 = "SELECT profile FROM shivansh_people where username = '".$_SESSION["username"]."';";
$result = $con->query($sql1);
$row = $result->fetch_assoc();
echo $row["profile"];  ?>" height='10%' width='10%'><br>
<img id="prof2" src="./upload1/<?php include ("config.php");
$sql2 = "SELECT background FROM shivansh_people where username = '".$_SESSION["username"]."';";
$result = $con->query($sql2);
$row = $result->fetch_assoc();
echo $row["background"];  ?>" height='15%' width='25%'>


<form name="profile" action="upload.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="Upload Image" name="submit">
</form>
Select back image:
<form name="cover" action="upload1.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload1" id="fileToUpload1">
<input type="submit" value="Upload Image" name="submit">
</form>
<form action="logout.php" method="post">
<input type="submit" value="logout">
</form>
<form action="updateprofile.php" method="post">
<input type="submit" value="Update Profile">
</form>

<form action="pass.php" method="post">
<input type="submit" value="change password">
</form>
<form action="feedpage.php" method="post">
<input type="submit" value="go to feeds">
</form>


  <?php
if($con)
{
  echo "connected";
}}
?>

</form>
<script>
document.getElementById("myImg").src = "hackanm.gif";

</script>
</body>
</html>

