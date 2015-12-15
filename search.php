<?php

$connection = mysqli_connect('localhost','root','','ajax');

// if ($connection){
// 	echo "connected";
// }
$search = $_POST['search'];

if (!empty($search)){
	$query = "SELECT * FROM cars WHERE cars LIKE '$search%'";
	$search_query = mysqli_query($connection,$query);
	
	if (!$search_query){
		die('QUERY FAIL'.mysqli_error($connection));
		
		
	}
	
	while ($row = mysqli_fetch_array($search_query)){
		$brand = $row['cars'];
// 		echo "<li>".$brand."</li>";
		
		?>
		
		<ul>
  <?php 
  	echo "<li>{$brand} in stock</li>";
//   echo "<li>".$brand."</li>";
  
  ?>

</ul>

	<?php }
}
?>