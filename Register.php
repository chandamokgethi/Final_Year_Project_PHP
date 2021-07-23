<?php


require("config/db_config.php");
$message="";

if(isset($_POST['submit']))

{

 $_fname = $_POST['fname'];
 $_email = $_POST['email'];
 $_usrname = $_POST['usrname'];
 $_pass = $_POST['pass'];
 $_usrtype = $_POST['usrtype'];

 if (!empty( $_fname) && !empty( $_email)
 && !empty( $_pass))
 {

  
  $query ="insert into user ( names, email, username, password, user_type) values 
  ('$_fname','$_email','$_usrname','$_pass','$_usrtype')";

    if(mysqli_query($conn,$query)){
      $message = "registration successfull";
    }else{
      $message = "registration failed";
    }

}else{

  $message = "Make sure that all fields are filled";
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
input[type=email] {
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

.register{
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
    <title>Register</title>
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
<div class="register">
<span style="color:red;"><?php if(isset($message)){ echo $message;} ?></span>
<br>
<br>
<br>
<h1>Sign-Up here</h1>
  <form method="POST" action="Register.php">  
  
    <label for="fname">Names</label>
    <input type="text" id="fname" name="fname" placeholder="Enter Names">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter Email">
    <label for="usrname">Username</label>
    <input type="text" id="usrname" name="usrname" placeholder="Enter Username">
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" placeholder="Enter password">
    <label for="User-type">User-type</label>
    <select id="usrtype" name="usrtype">
             <option value="lp">User</option>
             <option value="go">Game-organiser</option>
            </select>
            <input type="submit" name="submit" value="Sign-Up">
    
  </form>
</div>
</body>
</html>