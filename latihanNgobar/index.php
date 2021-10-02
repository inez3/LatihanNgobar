<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="addData.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<br>
<table style="width: 100%;" border="2">
	<thead>
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Option</th>
		</tr>
	</thead>
	<tbody>
		<?php
				include "koneksi.php";
				$query = "SELECT id, firstName, lastName FROM user";
				$select = mysqli_query($conn, $query);
				// var_dump(mysqli_fetch_array($select));

				while (($data = mysqli_fetch_array($select))) 
				{ ?>
				<tr>
				<td><?php echo $data ['id']; ?></td>
				<td><?php echo $data ['firstName'];?></td>
				<td><?php echo $data ['lastName'];?></td>
				<td><a href="editData.php?id=<?php echo $data['id'];?>" title="edit data"><button>Edit</button></a> |
           			<a href="deleteData.php?id=<?php echo $data['id'];?>" title="edit data"><button>Hapus</button></a></td>
				</tr>	
				<?php } ?>
		
	</tbody>
</table>
</body>
</html>
