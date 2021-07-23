<?php

session_start();

require("config/db_config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
}

$message="";

$id =$_SESSION['id'];




if(isset($_POST['submit']))

{




 $_evntreg = $_POST['evntreg'];
 $_userremark = $_POST['userremark'];
 $user_id= $id;

 

  
  $query ="insert into bookings (Number_of_members, User_remark,user_id) values 
  ('$_evntreg','$_userremark','$user_id')";


    if(mysqli_query($conn,$query)){
      $message = "registration successfull";
    }else{
      $message = "registration failed";
    }

  
 }




?>


<!DOCTYPE html>

<html lang="en">
<style>


input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 20%;
  background-color: #063146;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
}
input[type="submit"]:hover{
    cursor: pointer;
    background: #4CAF50;
    color: #000;
}

.event-reg{
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-left: 400px;
  margin-right: 400px;
  margin-bottom: 50px;
}
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
  }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event-registration</title>
</head>
<body>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="event-reg">
    
<h3>EVENT REGISTRATION</h3>
   <?php echo $message;  ?>
  <form method="POST"  action="Register_event.php">    
  
    <input type="number" id="evntreg" name="evntreg"  placeholder="Number of members">
    <textarea class="contact-form-text" name="userremark" placeholder="User remark" ></textarea>

            <input type="submit" name="submit" value="Register">
            
  </form>
</div>
</body>
</html>