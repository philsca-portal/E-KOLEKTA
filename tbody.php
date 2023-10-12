<?php
	$servername = 'localhost';
	$username = 'root';
	$password = 'Ilovenature07';
	$database = 'maps';

	$connection = new mysqli($servername,$username,$password,$database);

		if($connection->connect_error){
			die('Connection failed: ' .$connection->connect_error);
		}

		$sql = "SELECT * FROM `entries` WHERE `tag` LIKE 'Garbage Pile'";
		$display = $connection->query($sql);

			if(!$display){
				die('Invalid query: ' .$connection->error);
			}
				while ($row = $display->fetch_assoc()) {
					echo  "<tr>
							<td>". $row["id"]. "</td>
							<td>". $row["tag"]. "</td>
							<td>". $row["type"]. "</td>
							<td>". $row["date"]. "</td>
							<td><img src='".$row["image"]."'style='width: 100px; height: 150px;'></td>
							<td>". $row["loc"]. "</td>
							<td>
								<a class='btn btn-primary btn-sm' href='collected.php?id=$row[id]' style='margin-bottom: 10px;'>Collected</a>
								<a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Cancel</a>	
							</td>
							</tr>";
				}
?>