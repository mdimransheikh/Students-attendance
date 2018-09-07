<?php 
	include 'inc/header.php';
	include 'lib/Student.php';
?>

	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h2>
	    			<a class="btn btn-success" href="add.php">Add student</a>
	    			<a class="btn btn-info pull-right" href="index.php">Take Attendance</a>
	    		</h2>
	    	</div>
	    	<div class="panel-body">
	    		<form action="" method="post">
	    			<table class="table table-striped">
						  <thead>
						    <tr>
						      <th width="25%">Serial</th>
						      <th width="50%">Attendance Date</th>
						      <th width="25s%">Action</th>
						    </tr>
						  </thead>
						  <tbody>
					  <?php 
					  		$stu = new Student();
					  		$get_time = $stu->getTime();
					  		if($get_time){
					  			$i=0;
					  			while($result = $get_time->fetch_assoc()){
					  			$i++;
					  ?>
						    <tr>
						      <th scope="row"><?php echo $i;?></th>
						      <td><?php echo $result['att_time'];?></td>
						      <td>
						      	<a class="btn btn-primary" href="student_view.php?dt=<?php echo $result['att_time'];?>">View</a>
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