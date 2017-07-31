<?php session_start();?>
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Admin</a>
	</div>
	<?php if(isset($_SESSION['id'])):?>
		<div id="navbar" class="navbar-collapse collapse">
			<form action="logout.php" class="navbar-form navbar-right">
				<button type="submit" class="btn btn-default">Logout</button>
			</form>
		</div>
	<?php endif;?>
</div>