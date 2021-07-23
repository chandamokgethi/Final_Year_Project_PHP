
<?php


 



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title> System</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/CSS.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <link rel="stylesheet" href="css/fontawesome.css" />
    <link rel="stylesheet" href="dist/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />   <script src="js/fontawesome.js"></script>
    <script src="js/b99e675b6e.js"></script>
    <script src="js/dialogify.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/style.css">


    <script src="js/jquery-ui.js"></script>

    <script src="js/index.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar">

	  <body style="">
    <div class="adminmenu">
        <header>My Account</header>
        <ul>
        <li><a href="user-profile.php"><span class="fas fa-user"></span>My Profile</a></li>
        <li><a href="Events.php"><span class="fas fa-calender"></span>Events</a></li>
        <li><a href="Registered_events.php"><span class="fas fa-eye"></span>Registered Events</a></li>
		<li><a href="events_search.php"><span class="fas fa-eye"></span>Search Events</a></li>
        <li><a href="login.php"><span class="fas fa-lock"></span>Log Out</a></li>
        </ul>    
        
      </div>
  <div class="main_content">
        <div class="header">
		
		
        <h2 align="center">Events List</h2><br />
       
        </div  >
        <div class="info">
        <div class="form-group" style="margin-left:300px;">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Event name" class="form-control" />
				</div>
			</div>

      <br />
			<div style="margin-left:300px;" id="result"></div>
      
       </div>
      </div>
    </div>
 

  

  </body>

  <script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"helper/fetch_events.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>
</html>

