<?php

session_start();

require("config/db_config.php");

if(!isset($_SESSION['id'])){
    header("Location:login.php");
}

$id =$_SESSION['id'];
$message = "";
if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $username = $_POST['email'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $usertype = $_POST['usertype'];



    $sql = "update user set names='$name', username='$username', email='$email',
     password='$password', user_type='$usertype' where user_id='$id'";

    if(mysqli_query($conn, $sql)){

        $message = "Account updated";

    }else{
        $message = "update failed";

    }
}




?>

<html>

<head>
    <title>User-Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyles.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    
    <body style="background-image:url(img/background4.jpg)">
    <div class="adminmenu">
        <header>My Account</header>
        <ul>
        <li><a href="user-profile.php"><span class="fas fa-user"></span>My Profile</a></li>
        <li><a href="Events.php"><span class="fas fa-calender"></span>Events</a></li>
        <li><a href="Registered_events.php"><span class="fas fa-eye"></span>Registered Events</a></li>
        <li><a href="events_search.php"><span class="fas fa-search"></span>Search Events</a></li>
        <li><a href="login.php"><span class="fas fa-lock"></span>Log Out</a></li>
        </ul>    
        
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div style="margin-left: 400px;margin-right: 150px; background:#fff;">

        <h3 style="margin-left: 50%;">My Profile</h3>
                <form method="POST" action="user_profile.php"  style="margin-top: 40px;">

                    <input type="text" name="name" placeholder="Enter First-name">
                    <input type="text"  name="email" placeholder="Enter Email">
                    <select id="usertype" name="usertype">
                    <option value="lp">Local Player</option>
                    <option value="go">Game Organiser</option>
                    <input type="text" name="username" placeholder="Enter Username">
                    <input type="text" name="password" placeholder="Enter Password">
                   
                    
                    <input type="submit" name="submit" value="Update">
                </form>
                </div>
        </div>

    </body>

</html>