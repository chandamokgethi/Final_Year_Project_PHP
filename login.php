<?php


require("config/db_config.php");

$message="";

if(isset($_POST['submit']))

{

 $email = trim($_POST['username']);
 $email = htmlspecialchars (strip_tags($email));

 $password = trim($_POST['password']);
 $password = htmlspecialchars (strip_tags($password));

 $query = "select * from user where email = '$email' and password = '$password' and user_type='lp'";
 $run_query = mysqli_query($conn,$query);
 $row = mysqli_fetch_assoc($run_query);

 $query2 = "select * from user where email = '$email' and password = '$password' and user_type='go'";
 $run_query2 = mysqli_query($conn,$query2);
 $row2= mysqli_fetch_assoc($run_query2);


 $query3 = "select * from user where email = '$email' and password = '$password' and user_type='admin'";
 $run_query3 = mysqli_query($conn,$query3);
 $row3= mysqli_fetch_assoc($run_query3);
 
 if(mysqli_num_rows($run_query) ==1)
 {

  session_start();

  $_SESSION['id'] = $row['user_id'];

     header("location: user_profile.php");
 }else if(mysqli_num_rows($run_query2) ==1)
 {

  session_start();

  $_SESSION['id'] = $row['user_id'];

     header("location: Game_Organiser.php");
 
 }
 else if(mysqli_num_rows($run_query3) ==1)
 {

  session_start();

  $_SESSION['id'] = $row['user_id'];

     header("location: Admin.php");
 }
 else{
  $message="invalid credentials";

 }

} 

?>
<!DOCTYPE html>

<html lang="en">
<style>

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #063146;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type="submit"]:hover{
    cursor: pointer;
    background: #4CAF50;
    color: #000;
}
 a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkblue;
}
 a:hover{
    color: #ffc107;
}

.login{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 400px;
  margin-right: 400px;
  margin-bottom: 50px;
}
label{
  float: left;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>



</head>
<body>
<?php include "includes/navbar.php"; ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="login">
    <span style="color:red;"><?php if(isset($message)){ echo $message;} ?></span>
<br>
<br>
<br>

<h3>Sign-In here</h3>
  <form method="POST" action="login.php">    
  
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="username" placeholder="Enter Username">
    
    <label for="pass">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter password">
     <input type="submit" name="submit" value="Sign In">
          
            <a href="Register.php">Don't have an account?</a>
  </form>
</div>
</body>
</html>