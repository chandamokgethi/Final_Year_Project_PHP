<?php
require('config/db_config.php');

session_start();


if(!isset($_SESSION['id'])){
    header("Location:login.php");
}

$id =$_SESSION['id'];
if(isset($_GET['id']))
{
    $id= $_GET['id'];

   
    
    $query = "select * from event where id='$id'";
    $run = mysqli_query($conn,$query);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    
    img{
        float:right;
        margin-right: 300px;
        width: 380px;
        height: 200px;   
    }
    h1{
        font-size:130%;
        word-spacing: 10px;
         size: inherit; 
    }
    input[type=submit] {
    width: 10%;
    background-color: #063146;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 50px;
  }
  .sponser{
      border: grey 6px;
      padding: 2px;
  }
  .info{
      border: black 1px;
  }
  
   
   
    
    
    
    
    </style>
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

<?php while($row = mysqli_fetch_assoc ($run)){ ?>

  
    <div class="events">
        <img src="img/events.jpg" alt="">  
    </div>
    <div class="details">
        <h1><?= $row['category'] ?></h1>
        <p>This event is going to be held at the national stadium,
         on the 22 June 2020. 
        </p>
    </div>
    <div class="sponser">
        <h1><?= $row ['sponsor'] ?></h1>
        <p> <?= $row ['end_date'] ?></p>
        
    </div>
    <div class="info">
        <p class="fas fa-category"><?= $row ['description'] ?></p>
        <br>
        <p class="fas fa-calender"><?= $row ['start_date'] ?></p>
        <br>
        <p class="fas fa-location"> <?= $row ['description'] ?></p>
        <br>
        <input type="submit" onclick="location.href= 'action.php?event_id=<?= $row ['id'] ?>';" name="" onclick="return confirm('Are you sure you want to join?')" value="Register">
    </div>
     <?php  } ?>
    
</body>
</html>