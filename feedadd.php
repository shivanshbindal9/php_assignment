<?php
session_start();
include("config.php");
if(isset($_COOKIE["member"])){
echo "hiii";
//echo NOW();
$t = date('Y-d-m H:i:s',time());
echo "$t";
//$query = "INSERT INTO time VALUES('$t')";
$user=test_input($_SESSION["username"]);
$po=test_input($_POST["feed"]);
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($po)){
  $query = "INSERT INTO shivansh_feed(username,comment,time)";
  $query .= " VALUES ('$user', '$po','$t')";
  $result1=$con->query($query);
  echo "query added";}
  echo "<hr> <br>";

  $query2 ="select * from shivansh_feed";
  $res=$con->query($query2);
  if($res->num_rows>0){
    while ($row=$res -> fetch_assoc()){
      echo "feed:     ".$row['comment']."<br>". $row['time']."   ". $row['username']."<br><br>";
    }}
header("location:./feedpage.php");}
echo "logged out"; 
?>

