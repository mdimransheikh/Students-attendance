<?php 
	include 'inc/header.php';
	include 'lib/Student.php';
?>

<?php 
	$stu = new Student();
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_POST['name'];
		$roll = $_POST['roll'];
		$insertData = $stu->insertStudent($name, $roll);
	}
?>

<?php 
	if(isset($insertData)){
		echo $insertData;
	}
?>
	    <div class="panel panel-default">
	    	<div class="panel-heading">
	    		<h2>
	    			<a class="btn btn-success" href="add.php">Add student</a>
	    			<a class="btn btn-info pull-right" href="index.php">Back</a>
	    		</h2>
	    	</div>
	    	<div class="panel-body">
	    		<form action="" method="post">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Student Name</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" name="name">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Student Roll</label>
					    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Roll" name="roll">
					  </div>
					  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
	    	</div>
	    </div>

<?php 
	include 'inc/footer.php';
?>    