<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}


include_once("connection.php");

$sno = $_GET['sno'];
$result = mysqli_query($mysqli, "SELECT * FROM samyak_details1 WHERE sno=$sno");

while($res = mysqli_fetch_array($result))
{
	$samyak_id = $res['samyak_id'];
	$name = $res['name'];
	
	$events = $res['project'];
	}
?>
<html>
<head>	
<meta charset="UTF-8">
  <title>Project Expo Certificate Form</title>
  
         <link rel="stylesheet" href="css/style.css">
	<title>Edit Data</title>
</head>

<body>
	
	
	<form name="form1" method="post" action="projectcerttech.php">
		<table border="0">
			 <fieldset>
          <legend><span class="number">1</span>Project Expo Certificate Form</legend>

		  <label for="samyak_id">Samyak ID:</label>
             <input type="text" id="samyak_id" name="samyak_id" readonly value="<?php echo $samyak_id; ?>"  required />
		  
		<label for="name">Name:</label>
          <input type="text"  name="name" readonly value="<?php echo $name;?>" required />
          
          <label for="events">Project Expo Events Status:</label>
             <input type="text" id="events" name="events" readonly value="<?php echo $events;?>"  required />
              		   
            
</fieldset>
		
		 <button type="submit" name="insert">Certificate Written</button>
		</table>
	</form>
</body>
</html>
