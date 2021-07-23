<?php

require("../config/db_config.php");
$output = '';


if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($conn, $_POST["query"]);
	$query = "
	SELECT * FROM event 
	WHERE name LIKE '%".$search."'
	";
}
else
{
	$query = "
	SELECT * FROM event ";
}
$result = mysqli_query($conn, $query);
$row = mysqli_num_rows($result);


if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive" id="employee_table">
					 
					<table class="table table bordered" >
					
					<tr>
		                <th>ID</th>
                        <th>Category</th>
                        <th>Sponsor</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>start_date</th>
						<th>end_date</th>
						


						</tr>';
	while($row = mysqli_fetch_array($result))
	{



	
	 $output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["category"].'</td>
				<td>'.$row["sponsor"].'</td>
                <td>'.$row["name"].'</td>
				<td>'.$row["description"].'</td>
				<td>'.$row["start_date"].'</td>
				<td>'.$row["end_date"].'</td>

				

				

				<td width="10%">

				
			</td>
			</tr>
		';
	}
	
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>