<?php
	header('Content-Type: application/json');

	$conn = mysql_connect("localhost","root","toor","gmc_bi");

	$sqlQuery = "SELECT student_id, student_name, marks FROM tbl_marks ORDER BY student_id";

	$result = mysql_query($conn, $sqlQuery);

	$data = array();
	foreach ($result as $row) {
		$data[] = $row;
	}

	mysql_close($conn);

	echo json_encode($data);
?>