<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" href="style-login..css">
</head>
<meta charset="utf-8">
<body>
  <?php
session_start();
?>
	<div class="wrap">
    <div id="form-login">
      <form method="post">
        <tr>
          <h3>Login</h3>
          <br />
        <span> Don't have account? <a href="http://localhost/song/resgister1.php#">Register Here</a><br />
          <br />
        </span></td>
      </tr>
      <tr>
        <input type="text" name="txtusername" placeholder="Enter Username" id="txtusername">
        <input type="password" name="txtpassword" placeholder="Enter Password" id="txtpassword">
        <input type="submit" name="login" value="Login" id="btn-login">
        
        </tr>
        
      </form>
    </div>
    
  </div>
  
  <?php 

  
$connect = mysqli_connect('localhost','root','','php');
  if(isset($_POST['login'])){

    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
    $sql="select * from user where username='$username' and password='$password'";
    $result = mysqli_query($connect,$sql);
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);   
    if($check_login == 0){
     echo "<script>alert('Password or username is incorrect, please try again!')</script>";
     exit();
   }  
   if($check_login > 0){ 
   $_SESSION['userid'] = $row_login['userid'];
   $_SESSION['username'] = $row_login['username'];
 //  $_SESSION['username'] = $username;  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('index.php','_self')</script>";
  }
}
?>	

</body>
</html>