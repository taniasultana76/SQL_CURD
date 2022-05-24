<?php

$con = mysqli_connect("localhost", "root","", "data");
$sql = " CREATE Table ab(id INT NOT NULL AUTO_INCREMENT, 
name VARCHAR(64),
PRIMARY KEY(id)
	)";
$res = mysqli_query($con, $sql);
$query = "INSERT INTO ab (name) VALUES ('No ') ";
$result = mysqli_query($con, $query);
        if($result){
            echo "Sucsesfull";
        }
        else
        {
            echo "Failed";
        }


        $update = "UPDATE ab SET name = 'tania' WHERE name = 'no'";


        $result1 = mysqli_query($con,  $update);
        if($result1){
            echo "Sucsesfull1";
        }
        else
        {
            echo "Failed";
        }

        $delete = "DELETE FROM ab WHERE name = 'No photo1'";

        $result2 = mysqli_query($con,  $delete);
        if($result2){
            echo "Sucsesfull1";
        }
        else
        {
            echo "Failed";
        }
   
?>