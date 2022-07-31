<?php
	include 'database.php';
	$sql = "SELECT * FROM client";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
			<td><?=$row['name'];?></td>
			<td><?=$row['email'];?></td>
			<td><?=$row['phone'];?></td>
			<td><?=$row['status'];?></td>
			<td><?=$row['comment'];?></td>
			<td><button type="button" class="btn btn-success btn-sm update" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#update_client"
			data-id="<?=$row['id'];?>"
			data-name="<?=$row['name'];?>"
			data-email="<?=$row['email'];?>"
			data-phone="<?=$row['phone'];?>"
			data-status="<?=$row['status'];?>"
			data-comment="<?=$row['comment'];?>"
			">Edit</button></td>
		</tr>
<?php	
	}
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($conn);
?>