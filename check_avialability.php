<?php
//console.log("sdd");
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["username"])) {
  $result = mysql_query("SELECT count(*) FROM shivansh_people WHERE
      username='" . $_POST["username"] . "'");
  $row = mysql_fetch_row($result);
  $user_count = $row[0];
  if($user_count>0){ echo "<span class='status-not-available'> Username Not Available.</span>";}
  else{ echo "<span class='status-available'> Username Available.</span>";}
}
?>
