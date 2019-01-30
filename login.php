<!DOCTYPE html>
<html>
  <head>
<title>Multilevel login</title>
  </head>
  <body>
<form method="POST">
  <table>
    <tr>
      <td>User type</td>
      <td><select name="type">
          <option value="-1">select user type</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
          </select></td>
</tr>
<tr>
        <td>username</td>
        <td><input type="text" name="username" placeholder="username"></td>
      </tr>
      <tr>
        <td>password</td>
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

// Create connection
$conn = new mysqli($servername, $username, $password,"multilevel");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


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
      header("Location: user.html");

    }
  }
}
?>
