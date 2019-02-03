<!DOCTYPE html>

<html>
  <head>
<title>Multilevel login</title>
<link rel="stylesheet" href="login.css">
<style>
/*body {
  background-image: url('crm.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: cover;

}*/
</style>
  </head>



<body>
<form method="POST">
  <table>
    <tr>
      <td><b><font size=5>User type</b></font></td>
      <td><select name="type" style="font-size: 25px;width:250px;height:40px ; ">
          <option value="-1">Select user type</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select></td>
</tr>
<tr>
        <td><b><font size=5>Username</b></font></td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td><b><font size=5>Password</b></font></td>
        <td><input type="password" name="pwd" placeholder="password"></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="login"></td>
      </tr>

    </table>
  </form>
  </body>
</html>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "multilevel";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 //$conn=new mysqli_connect("localhost","root","","multilevel");
//if(!$con)
//{
//  echo "connection error".mysql_error();
//}
//$db =mysqli_select_db("multilevel",$con);
//if(!$db)
//{
  //echo "database not found".mysql_error();
//}
if(isset($_POST['submit'])){
  $type=$_POST['type'];
  $username=$_POST['username'];
  $password=$_POST['pwd'];
  $query="select * from login where username='$username' and password='$password' and type='$type'";
  $result=mysqli_query($conn,$query);
  while ($row=mysqli_fetch_array($result)) {
    if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
      header("Location: dashboard.html");
    }elseif ($row['username']==$username && $row['password']==$password && $row['type']=='User') {
      header("Location: process.html");
  }

      }
  }

?>
