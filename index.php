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
      <div><input type="checkbox" name="remember" id="remember">
      </form>
      <br>

      <form action="signup.php">
        New To It   ????
        <input type="submit" value="SignUp">
      </form>
    </fieldset>
    <script type="text/javascript">
      var maqli("192.168.121.187","first_year","first_year","first_year_db");
      l = /^[^@]+@[^@.]+\.[a-z]+$/i;
      function checking(){
        alert("want to remember it");}
      </script>





      <?php
  //  session_start();
      include("config.php");
  // session_start();
  // $con =new  mysqli("192.168.121.187","first_year","first_year","first_year_db");

  // Check connection
  //if ($con->connect_error)
  //{
  //echo "Failed to connect to MySQL: " . $con->connect_error;
  //}
      echo "connected";
//  if(isset($_POST['user'])){
      $sql = "SELECT username,password FROM shivansh_people";

      $usern = mysqli_real_escape_string($con, $_POST['user']);



//  $usern = $_POST['user'];
      $passw =md5($_POST['pass']);
      if(isset($_SESSION["id"])){

   // if(!empty($_POST["remember"])||$_SESSION["remember"]) {

        header("Location: profile.php");}
        if(isset($_COOKIE["member"]))
        {
          $query2 ="select * from shivansh_cookie";
          $res=$con->query($query2);
          if($res->num_rows>0){
            while ($row=$res -> fetch_assoc()){
    //  echo "feed:     ".$row['comment']."<br>". $row['time']."   ". $row['username']."<br><br>";
              $_SESSION["id"]=$row['session'];
              $_SESSION["username"]=$row['username'];
              header("Location: profile.php");
            }}



          }


/*if(!empty($_POST["remember"]))
  {
  setcookie ("member_login",$_POST["user"],time()+ (10 * 365 * 24 * 60 * 60));

  setcookie ("member_password",md5($_POST["pass"]),time()+ (10 * 365 * 24 * 60 * 60));

  } else {

  if(isset($_COOKIE["member_login"])) {

  setcookie ("member_login","");

  }

  if(isset($_COOKIE["member_password"])) {

  setcookie ("member_password","");

  }

}*/
echo $usern;
$result=$con->query($sql);
if($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($usern==$row["username"]&&$passw==$row["password"])
      //       echo "<script> window.location.assign('profile.php'); </script>";
      { $_SESSION["id"] = session_id();
    $sess=$_SESSION["id"];
    $_SESSION["username"]=$usern;
    $_SESSION["remember"]=$_POST["remember"];
      // echo "hello";
    if(isset($_POST["remember"])){
      setcookie("member",$_SESSION["id"],time()+(10*365*24*60*60));

      $query = "INSERT INTO shivansh_cookie(username,password,session)";
      $query .= " VALUES ('$usern', '$passw','$sess' )";


      $reuslt1=$con->query($query);
    }

    echo "<script> window.location.assign('profile.php'); </script>";

  }
   // echo"<br> either username or password is incorrect";
}
} else {
  echo "0 results";
}
//if(isset($_SESSION["id"])){

// if(!empty($_POST["remember"])||$_SESSION["remember"]) {
//      header("Location: profile.php");}

?>

</body>
</html>
