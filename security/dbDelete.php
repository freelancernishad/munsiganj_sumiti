<a href="delete.php?database">Delete database</a>


<?php 

include 'config.php';

$sql = "SHOW TABLES FROM $database";
$result = mysqli_query($conn,$sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysqli_error();
    exit;
}
?>
<form action="delete.php" method="POST">
<select name="tableName" id="">
<?php 
while ($row = mysqli_fetch_row($result)) {
	?>
	<option value="<?php echo $row[0] ?>"><?php echo $row[0] ?></option>
	<?php
	
	

}

mysqli_free_result($result);

?>
</select>
<input type="submit" name='table' value='Delete table' />
</form>

