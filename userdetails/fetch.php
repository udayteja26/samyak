<?php session_start(); 

if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}
$conn  = new mysqli('localhost', 'root', 'klu@1234', 'samyak');
//$query = "select distinct sno, name, email, mobile, college_name,college_id from user_details order by sno";
$query ="SELECT * FROM samyak_details1 WHERE login_id=".$_SESSION['id']." ORDER BY sno DESC ";


$result = $conn->query($query) or die($conn->error . __LINE__);
$fetch_data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fetch_data[] = $row;
    }
}
$jResponse = json_encode($fetch_data);
echo $jResponse;
?>