
<!--1--insert query -->
<?php
$con = mysqli_connect("localhost", "root", "", "cse");

if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    $email = $_POST['email'];
   	$password = $_POST['password'];
 	
 	$query = "INSERT INTO all_data(name, email, password) VALUES('$name', '$email','$password')";

    $result = mysqli_query($con, $query);
        if($result){
            echo "<script>alert('Sucsesfull')</script>";
        }
        else
        {
            echo "<script>alert('Failed')</script>";
        }
    }
    ?>

<!-- end insert query-->





<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>10 sql query of php</title>
       
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
    </head>
    <body><center>
<h1>10 sql query of php</h1>
</center>
      <div class="container">
      
      	<form action="" method="post" >
			<h1 style="
            font-size: 50px;margin-left: 75px;">
              Insert data
            </h1>

                    <label>Username:</label><br>
                    <input type="text"   class="txt" name="username" placeholder="Enter Your username" required="" autocomplete="off" />
                    <br>
                    
                    
                    <label  >E-mail:</label><br>
                    <input type="email" class="txt"  name="email"  placeholder="Enter Your e-mail" required=""  autocomplete="off"  /><br>
                    
                    
 


                    <label  >Password:</label><br>
                    <input  type="password" class="txt"  name="password"  placeholder="Enter Your password" required="" autocomplete="off"/><br><br>
                    <br><br><input type="submit" name="submit" class="a" value="sing-up">
               <br>
                <br>
          
            </form>

            

            
        </div>
        <!-- end insert-->

        <!-- start display query-->

        <div class="t">
        	<h1>Display data</h1>

        	<table border="1" align="center">
			<tr>
				<th width="200" height="50">Name</th>
				<th width="200" height="50">E-mail</th>
				<th width="200" height="50">Password</th>
				<th width="200" height="50">Action</th>
				
				
			</tr>

			<?php
			$q = 
				"SELECT * FROM all_data ";
				$run=mysqli_query($con,$q);
				while($row=mysqli_fetch_array($run))
				{
					$id = $row['id'];
				 $username=$row['name'];
				 $email=$row['email'];

				 $pass=$row['password'];
				 
				?>
				<tr>
				<td width="200" height="50"><center><?php echo $username?></center></td>
				
					<td width="200" height="50"><center><?php echo $email?></center></td>
					<td width="200" height="50"><center><?php echo $pass?></center></td>
					<td width="200" height="50"><a href="update.php?id=<?php echo $row['id']; ?>">update</a>  <a href="delete.php?id=<?php echo $row['id'];?>" name="delete">delete</a></td>
					
					</tr><?php}?>
        	</table>

        </div>
            
      <!-- end display-->
      <!-- start search query--> 

<?php
		
		if(isset($_POST['search'])){
			$search1 = $_POST['search'];
			
			$query = "SELECT * FROM all_data where name LIKE '%$search1%'";
			
		}
		
		else
		$query ="SELECT * FROM all_data";
		$run = mysqli_query($con, $query);
		
		?>
	
			<h1>Search query</h1>
		
<center>
<form action="" method="POST">
	<input type="text" name="search" >
	
	<button  >Search</button><br><br>
	<table border="2">
		<tr>
		<th>name</th>
		<th>email</th>
		<th>password</th>
		
</tr>
		<?php while($row = mysqli_fetch_object($run)) { ?>
<tr>

			<td width="200" height="50"><?php echo $row->name; ?></td>
		<td width="200" height="50"><?php echo $row->email; ?></td>
		<td width="200" height="50"><?php echo $row->password; ?></td>
	</tr>
	<?php } ?>
	</table>
	
	
	
</form><br>
<a href="log.php">Log In Query</a>
</center><br>
<!--end search-->



</body>
</html>     

       
        
            

        
    