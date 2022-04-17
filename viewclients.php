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
            background : url('https://images.pexels.com/photos/1072824/pexels-photo-1072824.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
		}
		.alb {
			width: 400px;
			height: 400px;
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
     <a href="ecoton/index.html" style="font-size:50px; color:white;">&#8592;</a>
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