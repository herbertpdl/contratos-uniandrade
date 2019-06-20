<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contrato Uniandrade</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row justify-content-xs-center">
			<div class="col-xs-10 col-md-6">
				<form name="form" method="post" action="../controllers/gerarpdf.php">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" class="form-control" name="nomeAluno">
					</div>
					<div class="form-group">
						<label>CPF:</label>
						<input type="text" class="form-control" name="cpfAluno">
					</div>
					<div class="form-group">
						<label>Curso:</label>
						<input type="text" class="form-control" name="cursoAluno">
					</div>
					<button type="submit" class="btn btn-primaty">GERAR</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>