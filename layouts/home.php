<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 2 PBWL </title>
	<link rel="stylesheet" href="<?php echo AST; ?>/css/bootstrap.min.css">
</head>

<body>

 

<nav class="navbar" style="background-color: #e3f7e4;">
  <!-- Navbar content -->
</nav>
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo URL; ?>/home">Tugas-2</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?php echo URL; ?>/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo URL; ?>/golongan">Golongan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo URL; ?>/pelanggan">Pelanggan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link float-end" href="<?php echo URL; ?>/login">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container mt-3">
		<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
	</div>

	<script src="<?php echo AST; ?>/js/bootstrap.bundle.js"></script>
	</main>
</body>

</html>