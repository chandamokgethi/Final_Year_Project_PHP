<?php



require("config/db_config.php");


$query = "select * from event where status='active'";
$run = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=< initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <style>
   .events{
       background-color: grey;
       margin-left: 300px;
       height: 150px;
       margin-right: 60px;
       margin-top: 20px;
       padding: 4px;
       
    }


img{
    width: 180px;
    height: 120px;
    margin-top: 10px;
    margin-left: 5px;
    float: left;
    border-radius: 150px;
    
}
h1
{
    float: left;
    color: #fff;
    margin-top: 25px;
    margin-left: 20px;
    word-spacing: 10px;
    size: inherit;
    padding-top: 30px;
    font-size:70%;
}

h2
{
    float: left;
    color: #fff;
    margin-top: 25px;
    margin-left: 40px;
    word-spacing: 10px;
    size: inherit;
    padding-top: 30px;
    font-size:70%;
}


h3
{
    float: left;
    color: #fff;
    margin-top: 25px;
    margin-left: 40px;
    word-spacing: 10px;
    size: inherit;
    padding-top: 30px;
    font-size:70%;
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
    float:right;
    margin-right:25px;
    font-size:9px;
  }




    </style>
</head>

<body style="background-image:url(img/background4.jpg)">
    <div class="adminmenu">
      
        <header>Organiser Panel</header>
        <ul>
        <li><a href=""><span class="fas fa-qrcode"></span>Dashboard</a></li>
        <li><a href=""><span class="fas fa-calendar"></span>Events</a>
        <ul>
            <li><a href="Game_Organiser.php"><span class="fas fa-plus"></span>Add Event</a></li>
            <li><a href="event_game.php"><span class="fas fa-eye"></span>View Events</a></li>
            <li><a href="view-reports.php"><span class="fas fa-eye"></span>View Event Reports</a></li>
        </ul>
        
        </li>
        <li><a href="login.php"><span class="fas fa-lock"></span>Log Out</a></li>
        </ul>    
          
        
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>

<?php while($row = mysqli_fetch_assoc ($run)){ ?>
   
    <div class="events">
       
        <img src="uploads/<?= $row['image'] ?>" alt="">  
        <h1 ><?= $row['start_date'].' To '. $row['end_date']  ?></h1>
        <h2><?= $row['category'] ?></h2>
        <h3>Location: National-Stadium</h3>
        <input  type="submit"  onclick="location.href= 'Edit_event.php?eventid=<?= $row['id']; ?>';" name="" value="Update">
       
    </div>
    <?php  }?>
    
</body>
</html>