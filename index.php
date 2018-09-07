<?php 
	include 'inc/header.php';
	include 'lib/Student.php';
?>

<?php 
	$stu = new Student();
	$cur_date = date('y-m-d');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$attend = $_POST['attend'];
		$insertattend = $stu->insertAttendance($cur_date, $attend);
	}
?>



<?php 
	if(isset($insertattend)){
		echo $insertattend;
	}
?>
	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h2>
	    			<a class="btn btn-success" href="add.php">Add student</a>
	    			<a class="btn btn-info pull-right" href="date_view.php">View all attendance</a>
	    		</h2>
	    	</div>
	    	<div class="panel-body">
	    		<form action="" method="post">
	    			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th width="25%">Serial</th>
						      <th width="25%">Student Name</th>
						      <th width="25%">Student Roll</th>
						      <th width="25%">Attendance</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php 
						  		$get_student = $stu->getStudents();
						  		if($get_student){
						  			$i=0;
						  			while($result = $get_student->fetch_assoc()){
						  			$i++;
						  ?>
						    <tr>
						      <th scope="row"><?php echo $i;?></th>
						      <td><?php echo $result['name'];?></td>
						      <td><?php echo $result['roll'];?></td>
						      <td>
						      	<input type="radio" name="attend[<?php echo $result['roll'];?>]" value="present">P
						      	<input type="radio" name="attend[<?php echo $result['roll'];?>]" value="absent">A
						      </td>
						    </tr>
						    <?php } } ?>
						    <tr>
						    	<td>
						    		<input type="submit" name="submit" class="btn btn-success" value="Submit">
						    	</td>
						    </tr>
						  </tbody>
					</table>
	    		</form>
	    	</div>
	    </div>

<?php 
	include 'inc/footer.php';
?>    