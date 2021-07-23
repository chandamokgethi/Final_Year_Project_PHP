<?php
     require("config/db_config.php");
?>

   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM event";
        $query_run = mysqli_query($conn, $query);
    ?>
<html>

<head>
    

        <div style="margin-left: 400px;margin-right: 150px; background:#fff;">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Registration ID</th>
            <th>Category</th>
            <th>Sponsor</th>
            <th>Name</th>
            <th>Description</th>
            <th>Start_date</th>
            <th>End_date</th>
        
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
                
            }
               ?>
          <tr>
            <td><?php  echo $row['id']; ?></td>
            <td><?php  echo $row['category']; ?></td>
            <td><?php  echo $row['sponser']; ?></td>
            <td><?php  echo $row['name']; ?></td>
            <td><?php  echo $row['desciption']; ?></td>
            <td><?php  echo $row['start_date']; ?></td>
            <td><?php  echo $row['end_date']; ?></td>

            <td>
                <form action="register_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> APPROVE</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                </form>
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
    </div>


<?php


if(isset($_Get['delete_btn']))
{
    $id = $_Get['delete_id'];

    $query = "DELETE FROM event WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: register.php'); 
    }    
}
?>


   


    

    </body>

</html>