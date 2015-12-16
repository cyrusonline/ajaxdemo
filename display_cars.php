<?php


include 'db.php';

$query ="SELECT * FROM cars";
$query_cars_info = mysqli_query($connection,$query);

if (!$query_cars_info){
	die("Query Failed".mysqli_error($connection));
	
	
}

while ($row= mysqli_fetch_array($query_cars_info)){
	echo "<tr>";
	echo "<td>{$row['id']}</td>";
	echo "<td>{$row['cars']}</td>";
	echo "</tr>";
	
}
