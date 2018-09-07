<?php 
	include 'inc/header.php';
	include 'lib/Student.php';
?>



<?php 
	$stu = new Student();
	$dt = $_GET['dt'];
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$attend = $_POST['attend'];
		$updateattend = $stu->updateAttendance($dt, $attend);
	}
?>

<?php 
	if(isset($updateattend)){
		echo $updateattend;
	}
?>
	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h2>
	    			<a class="btn btn-success" href="add.php">Add student</a>
	    			<a class="btn btn-info pull-right" href="date_view.php">Back</a>
	    		</h2>
	    	</div>
	    	<div class="panel-body">
	    		<form action="" method="post">
	    			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th width="20%">Serial</th>
						      <th width="20%">Student Name</th>
						      <th width="20%">Student Roll</th>
						      <th width="20%">Attendance Date</th>
						      <th width="20%">Attendance</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php 
						  		$get_alldata = $stu->getallData($dt);
						  		if($get_alldata){
						  			$i=0;
						  			while($result = $get_alldata->fetch_assoc()){
						  			$i++;
						  ?>
						    <tr>
						      <th scope="row"><?php echo $i;?></th>
						      <td><?php echo $result['name'];?></td>
						      <td><?php echo $result['roll'];?></td>
						      <td><?php echo $result['att_time'];?></td>
						      <td>
						      	<input type="radio" name="attend[<?php echo $result['roll'];?>]" value="present" <?php if($result['attend'] == 'present'){echo "checked"; } ?>>P
						      	<input type="radio" name="attend[<?php echo $result['roll'];?>]" value="absent" <?php if($result['attend'] == 'absent'){echo "checked"; } ?>>A
						      </td>
						    </tr>
						    <?php } } ?>
						    <tr>
						    	<td>
						    		<input type="submit" name="submit" class="btn btn-success" value="update">
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