<?php 
		if(isset($_GET['pageid'])){
		$pageid = $_GET['pageid'];
		$query = "select * from tbl_page where id='$pageid'";
		$title = $db->select($query);
		if($title){
			while($pages = $title->fetch_assoc()){
	?>
		<title><?php echo $pages['name']; ?>-<?php echo TITLE; ?></title>
	<?php } } }else{ ?>
		<title><?php echo $fm->title();?>-<?php echo TITLE; ?></title>
	<?php } ?>

	

	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">