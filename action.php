<?php

require("config/db_config.php");
session_start();


if(!isset($_SESSION['id'])){
  header("Location:login.php");
}

$id =$_SESSION['id'];

if(isset($_GET['id'])){

    $event_id = $_GET['id'];
    $query="delete from event where id='$event_id'";

    if(mysqli_query($conn,$query)){

        header("Location:manage_events.php");
    }

}

if(isset($_GET['cancel_id'])){

  $bookings_id = $_GET['cancel_id'];
  $query="delete from bookings where id='$bookings_id'";

  if(mysqli_query($conn,$query)){

      header("Location:Registered_events.php");
  }

}

    if(isset($_GET['approve_id'])){

    $event_id = $_GET['approve_id'];
    $query="update event set status='active' where id='$event_id'";

    if(mysqli_query($conn,$query)){

        header("Location:manage_events.php");
    }

  }
  if(isset($_GET['event_id'])){

    $event_id = $_GET['event_id'];
    $query="insert into bookings(event_id, user_id) values ('$event_id','$id')";

    if(mysqli_query($conn,$query)){

        header("Location:Registered_events.php");
    }

  }

?>