<?php
$conn  = new mysqli('localhost', 'root', 'klu@1234', 'samyak');
$query = "select sno,samyak_id,name,college_name,paper from samyak_details1 where paper='paper' order by sno";
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