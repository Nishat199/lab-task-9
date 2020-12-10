<?php include 'admin_header.php';
require_once '../controllers/department_controller.php';
$categories = getAllDepartments();
?>
<!--All Categories starts -->

<div class="center">
	<h3 class="text">All Categories</h3>
	<table class="table table-striped">
		<thead>
			<th>Sl#</th>
			<th> Name</th>
			<th>Product Count </th>
			<th></th>
			<th></th>

		</thead>
		<tbody>
			<?php

			foreach ($categories as $key) {
						echo '<tr>';
								echo '<td> '.$key["id"].'</td>';
								echo '<td> '.$key["name"].'</td>';
								echo '<td><a href="editcategory.php/?id='.$key["id"] . '" class="btn btn-success" >Edit</a> </td>';
								echo '<td><a href="deletcategory.php/?id='.$key["id"] . '" class="btn btn-danger" >Delete</a> </td>';
						echo '</tr>';
			}

			 ?>
		</tbody>
	</table>
</div>
<!--All Categories ends -->
<?php include 'admin_footer.php';?>