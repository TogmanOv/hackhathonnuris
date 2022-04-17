<?php include "db_connect.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
<style>
	
    </style>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM files ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($files = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="assets/uploads/<?=$files['file_path']?>">
             </div>
          		
    <?php } }?>
</body>
</html>