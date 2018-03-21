<?php session_start();

if(!isset($_SESSION['valid'])) {
	header('Location:login.php');
}

include("connection.php");
  $con =mysqli_connect('localhost','root','klu@1234');
  
   if(!$con)
   {
	   echo 'not connected to server';
   }
   
   if(!mysqli_select_db($con,'samyak'))
   {
	   echo 'database not selected';
   }
  $login_Id = $_SESSION['id'];
  $samyak_id=$_POST['samyak_id'];
  $name = $_POST['name'];
	
	$email = $_POST['email'];
	$mobile=$_POST['mobile'];
	$user_city=$_POST['user_city'];
	$blood_group=$_POST['blood_group'];
	$college_name=$_POST['college_name'];
	$college_id=$_POST['college_id'];
	$stream=$_POST['stream'];
	$branch=$_POST['branch'];
	$tech=$_POST['tech'];
	$nontech=$_POST['nontech'];
	$paper=$_POST['paper'];
    $poster=$_POST['poster'];
	$literary=$_POST['literary'];
	$project=$_POST['project'];
	$culturals=$_POST['culturals'];
	$ambassador=$_POST['ambassador'];
	$proshow=$_POST['proshow'];
	


    	if(isset($_POST['view'])) 
{
	?>
	<html>
	<script>
     function goBack() {
    window.history.back();
}
</script>

	   
	  <body align="center" >
	      <h1>Name :- <?PHP echo $name;    ?> </h2><br>
		  <h1>Email :- <?PHP echo $email;    ?> </h2><br>
		  <h1>Mobile :- <?PHP echo $mobile;    ?> </h2><br>
		  <h1>College Name :- <?PHP echo $college_name;    ?> </h2><br>
		  
		 <button onclick="goBack()">Go Back</button>
	  </body>
	</html>
	
<?PHP	
	
}



if(isset($_POST['insert'])) 
{


$result = mysqli_query($mysqli, "SELECT * FROM samyak_details1 ");

     while($res = mysqli_fetch_array($result))
       {
	     $samyakid = $res['samyak_id'];
	
	
	   }
	    $sam=$samyakid;

    	if($samyak_id==$sam)
		{
			echo 'Please provide valid samyakid';
		}
        else
		{
             $sql ="INSERT INTO samyak_details1 (login_id,samyak_id,name,email,mobile,user_city,blood_group,college_name,college_id,stream,branch,
			                                     tech,nontech,paper,poster,literary,project,culturals,ambassador,proshow) 
												 VALUES ('$login_Id','$samyak_id','$name','$email','$mobile','$user_city','$blood_group','$college_name',
												 '$college_id','$stream','$branch','$tech','$nontech','$paper','$poster','$literary','$project',
												 '$culturals','$ambassador','$proshow')";
     
	         if(!mysqli_query($con,$sql))
	          {
	           	 echo 'not inserted';
	          }
	 
	         else
	          {
		            header('Location:userdetailsentryform.php');
	          }

		 }
}
 ?>