<?php
include("config.php");
if(isset($_POST['loginButton'])) {
	//header("Location: index.php");
	//Login button was pressed
	$output = ' ';
	$sql = "SELECT * from USERS order by firstName DESC";
	$result = mysqli_query($con,$sql);
	
	?>

	<!DOCTYPE html>
	<html>
		<title>
			<head> fetch <head>
		</title>
	
	<body>
	<table align="centre" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4">record </h2></th>
		</tr>
		<t>
			<th> ID </th>
			<th> fName </th>
			<th> lname </th>
			<th> email </th>
		</t>
	<?php
		while($row = mysqli_fetch_assoc($result))
		{
	?>
	
			<tr>
				<td><?php echo $row['uID']; ?></td>
				<td><?php echo $row['firstName']; ?></td>
				<td><?php echo $row['lastName']; ?></td>
				<td><?php echo $row['email']; ?></td>
			</tr>
    <?php
			
		}
     ?>
	</table>
	</body> 
	</html>
	<?php
}
?>