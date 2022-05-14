
<table>
	<tr>
		<th>First Name</th>
		<th>last Name</th>
		<th>father Name</th>
	</tr>
	<?php 
		foreach($result as $res){
		echo "<tr>";
			echo "<td>".$res->first_name."</td>";
			echo "<td>".$res->Last_name."</td>";
			echo "<td>".$res->father_name."</td>";
			echo "<td><a href=".site_url('Crudcontroller/update?id='.$res->id).">Edit</a></td>";
			echo "<td><a href=".site_url('Crudcontroller/delete?'.$res->id).">Delete</a></td>";
			echo"</tr>";
		}
	?>
</table>