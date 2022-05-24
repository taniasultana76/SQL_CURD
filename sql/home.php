<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- sum query-->

<h1>
	Calculation query:
</h1>
<center>
<form action="" method="post">
	<input type="number" name="first">
	<input type="number" name="second"><br><br>
	<input type="submit" name="a" value="Add+">
	<input type="submit" name="b" value="Sub-">
	<input type="submit" name="c" value="Mult*">
	<input type="submit" name="d" value="Div/">
	<?php
	$con = mysqli_connect("localhost", "root", "", "cse");
if(isset($_POST['a'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
	$total = "The result is="  .$first+$second;
	


	 echo $total; }

	 if(isset($_POST['b'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
	$total = $first-$second;
	


	 echo "The result is="  .$total; }


if(isset($_POST['c'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
	$total = $first*$second;
	


	 echo "The result is="  .$total; }


if(isset($_POST['d'])){
	$first = $_POST['first'];
	$second = $_POST['second'];
	$total = $first/$second;
	


	 echo "The result is="  .$total; }


	 ?>
</form>
</center>

<!--end-->
<!--3 table joining-->
<h1>3 table joining query:</h1>
<center>
<form>

	<table border="2">
<tr>
		<th width="200" height="50">student name</th>
		<th width="200" height="50">dept name</th>
		<th width="200" height="50">roll_no</th>
	</tr>
<?php
$result = mysqli_query($con, "select roll.id,roll.rol_no,dept.d_name,all_data.name from roll LEFT join dept on roll.d_id=dept.id LEFT join all_data on dept.all_id=all_data.id");
	?>
<?php
	while($row = mysqli_fetch_array( $result))
		{
		?>
	<tr>
		<td width="200" height="50"><?php echo $row['name'];?></td>
		<td width="200" height="50"><?php echo $row['d_name'];?></td>
		<td width="200" height="50"><?php echo $row['rol_no'];?></td>
	</tr>
	<?php
	}
	?>


</table>
</form>
</center>





<!--end joining-->


<!--start array value insert-->
<h1>Insert checkbox array values:</h1>

<center>
	<form action="" method="post">
<input type="checkbox" name="check[]" value="cse">
<label>CSE</label>
<input type="checkbox" name="check[]" value="English">
<label>English</label>
<input type="checkbox" name="check[]" value="BBA">
<label>BBA</label>
<input type="checkbox" name="check[]" value="Law">
<label>Law</label>&nbsp;&nbsp;
<input type="submit" name="submit" value="Insert">
</form>
</center>
<?php
$con = mysqli_connect("localhost", "root", "", "cse");
if(isset($_POST['submit'])){
	$dept = $_POST['check'];

	$check = '';

	foreach ($dept as $check_1){

        $check .= $check_1. ",";
        }

        $query = "insert into dept_chk (dept) value ('$check')";

        $result = mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Done')</script>";
        } 
        else
        {
            echo "<script>alert('Something went wrong')</script>";
        }
    }


?>
<!--end-->

<!--file upload query-->
<h1>File Upload Query:</h1>
<center>
<form action="" method="post" enctype="multipart/form-data">
			        <label>Upload image</label>
		            <input type="file" required="required"  name="img"  >
		            <input type="submit" name="upload" value="Upload">

</form><br>
<a href="sql.php">SQL</a><br><br><a href="log.php">Login</a>
</center>
 <?php

 $con = mysqli_connect("localhost", "root", "", "cse");
			if(isset($_POST['upload']))
		{	
			
		   
			$image=$_FILES['img']['name'];
			$image_tmp=$_FILES['img']['tmp_name'];
			 move_uploaded_file($image_tmp,"images/$image");
			 if(mysqli_query($con,"insert into image (img) values('$image')"))
			{
				echo "<script>alert('Data Insert')</script>";
			}
		else
			{
			    echo "<script>alert('Data  Not Insert')</script>";
			
			}
		}
		?>

<!--end-->
</body>
</html>