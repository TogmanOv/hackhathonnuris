<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="indexclients.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Главная</a>
				<a href="hac/index.php" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Назад</a>
				<?php if($_SESSION['login_type'] == 1): ?>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>