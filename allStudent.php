<?php 
	include 'admin_header.php';
	require_once 'controllers/ProductController.php';
	$students = getAllStudents();
	
?>

<div class="center">
	<h3 class="text">All Students</h3>
	<table class="table table-striped">
		<thead>
			<th>Name</th>
			<th> ID</th>
			<th>DOB</th>
			<th> Credit</th>
			<th> CGPA</th>
			<th> Dept_id</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				foreach($products as $p){
					echo "<tr>";
						echo "<td>".$p["namw"]."</td>";
						echo "<td>".$p["id"]."</td>";
						echo "<td>".$p["dob"]."</td>";
						echo "<td>".$p["credit"]."</td>";
						echo "<td>".$p["cgpa"]."</td>";
						
						echo '<td><a href="editproduct.php" class="btn btn-success">Edit</a></td>';
						echo '<td><a class="btn btn-danger">Delete</td>';
					echo "</tr>";
					
				}
			?>
			
		</tbody>
	</table>
</div>
<!--Products ends -->
<?php include 'admin_footer.php';?>