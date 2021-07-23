<?php 
require('config/db_config.php');



if(isset($_POST['updatebtn'])){

        $_category = $_POST['category'];
        $_sponsors = $_POST['sponsors'];
        $_event_name = $_POST['event_name'];
        $_description = $_POST['description'];
        $_start_date = $_POST['start_date'];
        $_end_date = $_POST['end_date'];
        $_image = $_FILES['image']['name'];
        $upload ="uploads/".$_image;

        $ql = "UPDATE event set category='$_category',sponsors='$_sponsors',name='$_event_name' ,
         description='$_description' ,start_date='$_start_date' ,end_date='$_end_date' where  id='$_GET[eventid]'";

        if(mysqli_query($conn,$query)){
            echo "success";
            move_uploaded_file($_FILES['image']['tmp_name'],$upload);
        }else{
            echo "failed";
        }
    

    }



?>
<html>

<head>
    <title>Game-organiser page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/formstyles.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body style="background-image:url(img/background4.jpg)">
    <div class="adminmenu">
        <header>Games-Organiser Panel</header>
        <ul>
        <li><a href=""><span class="fas fa-qrcode"></span>Dashboard</a></li>
        <li><a href=""><span class="fas fa-calendar"></span>Events</a>
        <ul>
            <li><a href="Game_Organiser.php"><span class="fas fa-plus"></span>Add Event</a></li>
            <li><a href=""><span class="fas fa-edit"></span>Edit Event</a></li>
            <li><a href=""><span class="fas fa-eye"></span>View Event Reports</a></li>
        </ul>
        
        </li>
        <li><a href="login.php"><span class="fas fa-lock"></span>Log Out</a></li>
        </ul>    
        
        </div>



        <div style="margin-left: 360px;margin-right: 60px; background:#fff;">
        <h3 style="margin-left: 50%;">Edit Event</h3>

                <form method="POST" action="Edit_event.php" enctype="multipart/form-data" style="margin-top: 40px;">

                <label for="category">Category</label>
                    <select id="category" name="category">
                    <option value="Tenis">Vollyball</option>
                    <option value="Football">Football</option>
                    <option value="Netball">Netball</option>
                    <option value="Softball">Softball</option>
                    <option value="Rugby">Rugby</option>
                    <option value="Tenis">Tennis</option>
                    </select>
                    
                    <label for="sponsors">Event Sponsors:</label>
                    <select id="sponsors" name="sponsors">
                    <option value="puma">Puma</option>
                    <option value="asics">Asics</option>
                    <option value="pepsi">Pepsi</option>
                    <option value="addidas">Addidas</option>
                    </select>
                
              <input type="hidden" name="edit_id" value="" >
              
              <div class="form-group">
              <label for="ename">Event Name</label>
                    <input type="text" id="event_name" name="event_name" placeholder="Event name..">

                    <label for="evntd">Event Description</label>
                    <textarea id="description" name="description">Event Description...</textarea>

                    <label for="esd">Event Start-date</label>
                    <input type="date" id="start_date" name="start_date">

                    <label for="eed">Event End-date</label>
                    <input type="date" id="end_date" name="end_date">

                    <label for="image">Event Featured-Image</label>
                    <input type="file" id="image" name="image" placeholder="">
              <a href="register.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

          </form>

    </body>

</html>