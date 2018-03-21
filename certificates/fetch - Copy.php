<?php
$conn  = new mysqli('localhost', 'root', '', 'samyak');
$query = "select * from samyak_details1 where tech='tech' order by sno";
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