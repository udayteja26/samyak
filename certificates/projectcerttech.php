<?php session_start();
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
 $con =mysqli_connect('localhost','root','klu@1234');
  
   if(!$con)
   {
	   echo 'not connected to server';
   }
   
   if(!mysqli_select_db($con,'samyak'))
   {
	   echo 'database not selected';
   }
   
    
    
	$samyak_id = $_POST['samyak_id'];
  $sql = "UPDATE `samyak_details1` SET `project`='".'cert_written'."' WHERE `samyak_id` = '$samyak_id'";	
	if(!mysqli_query($con,$sql))
	 {
		 echo 'not updated';
	 }
	 
	 else
	 {
		 echo "<script>window.close();</script>";
	 }   
 
?>