<?php
	include '../model/db_connect.php';
	$id=$_GET['sk'];
	$query="SELECT id,thana FROM thana WHERE district_id='$id'";
	$results=getdata($query);
	print_r($results);
	
?>
<?php 
	foreach ($results as $value) {?>
		 <option value="<?php echo $value['id']; ?>"><?php echo $value['thana']; ?> </option>

<?php } ?>
