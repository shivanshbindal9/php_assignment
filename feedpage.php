<?php
session_start();
?>
<html>
<head>
	<title>
	</title>
</head>
<body>
	<table>
		<tr>
			<td>add comment </td>
		</tr>
		<tr>
			<td>
				<form action=" feedadd.php" method="post">
					<input type="text" placeholder="enter text here....." name="feed" >
					<input type="submit" value="submit">
				</td>
			</tr>
		</form>
	</table>
	<br> <hr>
</body>
<?php
if(!isset($_SESSION["username"])){
	echo "you are logged out";

}
include("config.php");
$query2 ="select * from shivansh_feed";
$res=$con->query($query2);
if($res->num_rows>0){
	while ($row=$res -> fetch_assoc()){
		echo "feed:     ".$row['comment']."<br>". $row['time']."   ". $row['username']."<br><br>";
	}
}
?>
</html>