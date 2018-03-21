<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// including the database connection file
include_once("connection.php");
//getting id from url
$sno = $_GET['sno'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM samyak_details1 WHERE sno=$sno");

while($res = mysqli_fetch_array($result))
{
	$samyak_id = $res['samyak_id'];
	$name = $res['name'];
	
	$events = $res['literary'];
	}
?>
<html>
<head>	
<meta charset="UTF-8">
  <title>Literary Report Form</title>
  
         <link rel="stylesheet" href="css/style.css">
	<title>Edit Data</title>
</head>

<body>
	<title>Edit Data</title>
	 <legend align="center"><h1>Literary Certificate form Form</h1></legend>
	
	<form name="form1" method="post" action="literarycerttech.php">
		<table border="0">
			
		
		
		 <fieldset>
         

		  <label for="samyak_id">Samyak ID:</label>
             <input type="text" id="samyak_id" name="samyak_id" readonly value="<?php echo $samyak_id; ?>"  required />
		  
		<label for="name">Name:</label>
          <input type="text"  name="name" readonly value="<?php echo $name;?>" required />
          
          <label for="events">Literary Events Status:</label>
             <input type="text" id="events" name="events" readonly value="<?php echo $events;?>"  required />
              		   
              		   
         
     	</fieldset>
		
	  
	 
 
	   
		 
		

		 <button type="submit" name="insert" value="insert">cerificate written</button>
		</table>
	</form>
</body>
</html>
