
<?php
     require("config/db_config.php");
     
// session_start();


// if(!isset($_SESSION['id'])){
//     header("Location:login.php");
// }
?>

   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM event";
        $query_run = mysqli_query($conn, $query);
    ?>
    <head>
    <title>Admin page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    </head>
    <body style="">
    <div class="adminmenu">
        <header>Admin Panel</header>
        <ul>
        <li><a href=""><span class="fas fa-qrcode"></span>Dashboard</a></li>
        <li><a href=""><span class="fas fa-calendar"></span>Events</a>
        <ul>
            <li><a href="manage_events.php"><span class="fas fa-trash"></span>Manage Events</a></li>
            
        </ul>
        
        </li>
        <li><a href="login.php"><span class="fas fa-lock"></span>Log Out</a></li>
        </ul>    
        
     </div>

         </div>

      <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0" style="margin-top:50px;margin-left:300px;">
        <thead>
          <tr>
            <th>Registration ID</th>
            <th>Category</th>
            <th>Sponsor</th>
            <th>Name</th>
            <th>Description</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>APPROVE</th>
            <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['category']; ?></td>
            <td><?php  echo $row['sponsor']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['description']; ?></td>
            <td><?php  echo $row['start_date']; ?></td>
            <td><?php  echo $row['end_date']; ?></td>

            <td>
                    <a href="action.php?approve_id=<?= $row['id'] ?>"   type="submit" name="edit_btn" onclick="return confirm('Are you sure you want to Approve?')" class="btn btn-success"> APPROVE</a>
            </td>
            <td>
                    <a  href="action.php?id=<?= $row['id'] ?>" type="submit" name="delete_btn" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger"> DELETE</a>
            </td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
   


