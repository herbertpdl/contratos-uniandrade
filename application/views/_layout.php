<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Contratos uniandrade</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Your styles -->
    <link rel="stylesheet" href="dist/styles/main.css">
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<header class="header"> 
					<div class="logo">
						<img src="app/images/logo.png" alt="Logo Uniandrade">
					</div>
					<nav class="navbar navbar-expand navbar- bg-light">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="nav nav-pills  mr-auto">
								<li class="nav-item active">
									<a class="nav-link active" href="#">Termo de cooperação técnica</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Termo obrigatório</a>
								</li>
							</ul>
							<button class="btn btn-primary">
								Admin
							</button>
						</div>
					</nav>
				</header>
			</div>
		</div>
		<?php
			$this->load->view($view);
		?>
		<script src="dist/scripts/main.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="dist/scripts/script.js"></script>
	</body>
</html>