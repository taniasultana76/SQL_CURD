

<?php
$con = mysqli_connect("localhost", "root", "", "cse");


if (isset($_GET['id']) ) {
		
		$del_ID = ($_GET['id']);
		
		$deleteItemQuery = "DELETE FROM all_data WHERE id = {$del_ID} ";

		if ($con->query($deleteItemQuery) === TRUE) {
				echo "deleted.";
				header("Location: sql.php"); 
				exit();
			} 

		else {
				
				echo "someting wong";
				echo $con->error;

		}
		
	}
?>