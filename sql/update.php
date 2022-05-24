




<?php
$con = mysqli_connect("localhost", "root", "", "cse");


if (isset($_GET['id']))
{
    $ID = $_GET['id'];

    $sql = "SELECT * FROM all_data WHERE id = $ID";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);

    if($count ==1)
    {
        $row = mysqli_fetch_assoc($res);
        $ID = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
       
    }
    else
    {
        header('location:sql.php');
    }

}
else
{
    header('location:sql.php');
}

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="post">
 <div class="food-menu-desc text-white">
                        <h3>data </h3>
                        <input type="hidden" name="id" value="<?php echo $ID;?>">
                       
                        <input type="text" name="name" value="<?php echo $name;?>">
                       
                        <input type="text" name="email" value="<?php echo $email;?>">
                        <input type="submit" name="update" value="update">
                        
                    </div>
                </form>


 </body>
 </html>
 <?php
$con = mysqli_connect("localhost", "root", "", "cse");



if(isset($_POST['update'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		$sql1 =  "UPDATE all_data  SET name ='$name', email ='$email' WHERE id = $id "; 
		$res1 = mysqli_query($con, $sql1);
		if($res1 == true)
		{
			header('location: sql.php');

		}
		else{
			header('location: update.php');
		}
		

	
	}

?>
