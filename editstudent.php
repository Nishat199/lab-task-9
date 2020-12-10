<?php include 'admin_header.php';?>
<!--editproduct starts -->
<div class="center">
<table>
	
	<td>
		<form class="form-horizontal form-material">
			<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">ID:</h4> 
				<select class="form-control">
					<option>Choose</option>
				</select>
			</div>
			<div class="form-group">
				<h4 class="text">DOB:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">Credit:</h4> 
				<input type="text" class="form-control">
			</div>
			<div class="form-group">
				<h4 class="text">CGPA:</h4> 
				<textarea type="text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<h4 class="text">Dept_ID:</h4> 
				<textarea type="text" class="form-control"></textarea>
			</div>
			
			
			<div class="form-group text-center">
				
				<input type="submit" class="btn btn-success" value="Edit Product" class="form-control">
			</div>
		</form>
	</td>
</table>				
</div>

<!--editproduct ends -->
<?php include 'admin_footer.php';?>