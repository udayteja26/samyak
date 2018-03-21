<?php session_start();


if(!isset($_SESSION['valid'])) {
	header('Location:login.php');
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Samyak User Data Form</title>
  
         <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
   
    <body>
	<h2 align="right" >		
		   Welcome: <?php echo $_SESSION['name'] ?> </br>
		    <a href="index.php">Home</a>
		   <a href="logout.php">Logout</a>
          	   
		 </h2> 

      <form action="userdetailsentryconn.php" method="post">
      
        <h1>Samyak User Data Form</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your Personal Information</legend>
         
         <label for="samyak_id">Samyak Id:</label>
             <input type="text" id="samyak_id" name="samyak_id" required />
		 
		 
		 
		 <label for="name">Name:</label>
          <input type="text"  name="name" required />
         
          <label for="blood_group">Blood Group:</label>
            <fieldset>
		   <input type="radio" name="blood_group" value="A+" > A+
           <input type="radio" name="blood_group" value="A-"> A-<br>
           <input type="radio" name="blood_group" value="B+"> B+ 
			<input type="radio" name="blood_group" value="B-" > B-<br>
           <input type="radio" name="blood_group" value="AB+"> AB+
           <input type="radio" name="blood_group" value="AB-"> AB- <br>
		   <input type="radio" name="blood_group" value="O+"> O+
           <input type="radio" name="blood_group" value="O-"> O-<br>
           <input type="radio" name="blood_group" value="Dont know" checked>Dont know 
              </fieldset>

			  
		 
		    <label for="college_id">college id:</label>
            <input type="text" name="college_id" required />
			
			 <label for="college_name">College name:</label>
           <input type="text"  name="college_name" required />
		   
		   
		    <label for="stream">Stream:</label>
             <input type="stream" id="stream" name="stream" required /> 
			 
			 
			 
		    <label for="branch">Branch:</label>
             <input type="branch" id="branch" name="branch" required />
		 
		 
          <label for="mail">Email:</label>
          <input type="text"  name="email" required />
		  
		   <label for="mobile">mobile:</label>
           <input type="number"  name="mobile" required />
		   
		   
		   <label for="user_city">City:</label>
           <input type="user_city"  name="user_city" required/>
           
           
		    
		   		   
							   
         
     	</fieldset>
		
		
	
         
           
		  
		   
		 
			 
		    
		   
		    

         </fieldset>
		 
		 
		 <fieldset>
          <legend><span class="number">3</span>Event Information</legend>
         
          
		  
         <legend>  <label for="tech">Technical</label></legend>
        <fieldset> <input type="radio" name="tech" value="tech" >Registered
                   <input type="radio" name="tech" value="N_I" checked>Not Registered </fieldset>
			
		 <legend>  <label for="tech">Non-Technical</label></legend>
        <fieldset> <input type="radio" name="nontech" value="nontech" >Registered
                   <input type="radio" name="nontech" value="N_I" checked>Not Registered </fieldset>
		 
		 <legend>  <label for="tech">Paper</label></legend>
          <fieldset><input type="radio" name="paper" value="paper" >Registered 
                   <input type="radio" name="paper" value="N_I" checked>Not Registered </fieldset>
		 
		 <legend>  <label for="tech">Poster </label></legend>
        <fieldset> <input type="radio" name="poster" value="poster" >Registered
                  <input type="radio" name="poster" value="N_I" checked>Not Registered </fieldset>
		 
		 <legend>  <label for="tech">Literary</label></legend>
          <fieldset><input type="radio" name="literary" value="literary" >Registered 
                 <input type="radio" name="literary" value="N_I" checked>Not Registered </fieldset>
            
			<legend>  <label for="tech">Project Expo</label></legend>
        <fieldset> <input type="radio" name="project" value="project" >Registered
                   <input type="radio" name="project" value="N_I" checked>Not Registered </fieldset>
		 
		  <legend>  <label for="tech">Culturals</label></legend>
          <fieldset><input type="radio" name="culturals" value="culturals" >Registered 
         <input type="radio" name="culturals" value="N_I" checked>Not Registered </fieldset>
		 
		  <legend>  <label for="tech">Ambassador</label></legend>
          <fieldset><input type="radio" name="ambassador" value="ambassador" >Registered 
         <input type="radio" name="ambassador" value="N_I" checked>Not Registered </fieldset>
		 
		  <legend>  <label for="tech">Proshow</label></legend>
          <fieldset><input type="radio" name="proshow" value="proshow" checked >Registered 
         <input type="radio" name="proshow" value="N_I" >Not Registered </fieldset>
    
	
	
          
     

         </fieldset>
	 
		
		
		
         <button type="submit" name="view" value="view">View Data</button>
		
        <button type="submit" name="insert" value="insert">Save</button>
      </form>
      
    </body>
</html>