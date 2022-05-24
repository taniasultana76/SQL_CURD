
<!--login -->
<?php
$con = mysqli_connect("localhost", "root", "", "cse");


 if(isset($_POST['submit']))
      {
      
      $res=mysqli_query($con,"SELECT * FROM all_data WHERE name='$_POST[username]' && password='$_POST[password]';");
      
     

      
      $count= mysqli_num_rows($res);
      if($count == 0)
      {
        ?>
        <div class="alert alert-danger" style="width: 40%;margin-left: 30%;text-align: center;"><strong>Wrong username or password.</strong></div>
        <?php
      }
      else{

        ?>
        <script type="text/javascript">
          window.location="home.php"
        </script>
        <?php
      }}
		?>

<!-- end  query--><!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>10 sql query of php</title>
       
        <link rel="stylesheet" type="text/css" href="css/style.css">
       
    </head>
    <body><center>
<h1>Log in query</h1>
</center>
      <div class="container">
      
      	<form action="" method="post" >
			<h1 style="
            font-size: 50px;margin-left: 75px;">
              log-in
            </h1>

                    <label>Username:</label><br>
                    <input type="text"   class="txt" name="username" placeholder="Enter Your username" required="" autocomplete="off" />
                    <br>
                    <label  >Password:</label><br>
                    <input  type="password" class="txt"  name="password"  placeholder="Enter Your password" required="" autocomplete="off"/><br><br><br><br>
                    <input type="submit" name="submit" class="a" value="login">
               <br>
                <br>
          
            </form></div>
        <!-- end insert--></body>
</html>     

       
        
            

        
    