<?php session_start();
  if(isset($_SESSION['valid'])) {			
include("connection.php");					
	     $result = mysqli_query($mysqli, "SELECT * FROM login");
	           ?>
<html>
<link rel="stylesheet" type="text/css" href="css1.css">
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
   <head> 
       <title>User Detials Index</title>
   </head>
  <body> 
    <div id="border">
      <header id="topheader">
            <h1 align="center">User Detials Index </h1>
			   
	    <h2 align="right" >		
		   Welcome: <?php echo $_SESSION['name'] ?> </br>
		 </h2> 
        </header>  
        <div id="formborder">
	    <h1 align="center"></h1>
              
       
	   
	         <div class="container" >
       		<a target='_blank' href="userdetailsentryform.php" class="btn btn-primary cancelbtn" style="margin:2">insert Data</a>
				<a target='_blank' href="view.php" class="btn btn-primary cancelbtn" style="margin:2">View Data</a>
			    <a  href="logout.php" class="btn btn-primary cancelbtn" style="margin:2">LogOut</a>
       
	   
	   </div>
	<?php	
	} else 
	{
		echo "You must be logged in to view this page.";
		header('Location:login.php');
	}
	?> 
  </div>
</div>	
  </body>  
</html>