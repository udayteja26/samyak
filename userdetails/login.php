<?php session_start();
include("connection.php");
if(isset($_POST['submit'])) {
	$user = mysqli_real_escape_string($mysqli, $_POST['username']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);
	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		$row = mysqli_fetch_assoc($result);
		if(is_array($row) && !empty($row)) {
		$validuser = $row['username'];
		$_SESSION['valid'] = $validuser;
		$_SESSION['name'] = $row['name'];
		$_SESSION['id'] = $row['id'];
		} else {
		echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}
		if(isset($_SESSION['valid'])) {
			header('Location:index.php');			
		}
	}
} else {
}
?>
<html>
<body>
 <link rel="stylesheet" href="css/style.css">	
<form name="form1" method="post" action="">
		<h1>Samyak User LogIn Form</h1>
           <fieldset>
           <label for="name">user name</label>
          <input type="text" id="name" name="username" required />
          <label for="password">password</label>
          <input type="password" id="password" name="password" required />
		  </select>
     	</fieldset>
	          <button type="submit" name="submit">log in</button>
	</form>

</body>
</html>