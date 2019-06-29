	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="form">
					<h3>TERMO DE COOPERAÇÃO TÉCNICA</h3>
					<p>Por favor, insira abaixo, os dados referentes à <strong>UNIDADE CEDENTE (EMPRESA)</strong></p>
					<form action="Formulario/gerarPdf" method="POST">
						<div class="form-group">
							<div class="form-group">
								<label for="nome">Nome</label>
								<input required type="text" name="nome" class="form-control"  placeholder="Nome">
							</div>
							<div class="form-group">
								<label for="cep">CEP</label>
								<input required type="text" id="cep" name="cep" maxlength="9" class="form-control"  placeholder="00.000-000">
							</div>
							<div class="form-group col-md-6 offset-md-4">
								<a id="btn_consulta" class="btn btn-success">Consultar</a>
							</div>
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input required type="text" id="endereco" name="endereco" class="form-control"  placeholder="Endereço">
							</div>
							<div class="form-group">
								<label for="bairro">Bairro</label>
								<input required type="text" id="bairro" name="bairro" class="form-control"  placeholder="Bairro">
							</div>
							<div class="form-group">
								<label for="estado">Estado</label>
								<input required type="text" id="estado" name="estado" maxlength="2" class="form-control"  placeholder="Sigla do estado">
							</div>
							<div class="form-group">
								<label for="cidade">Cidade</label>
								<input required type="text" id="cidade" name="cidade" class="form-control"  placeholder="Cidade">
							</div>
							<div class="form-group">
								<label for="cnpj">CNPJ/MF</label>
								<input required type="text" id="cnpj" name="cnpj" class="form-control"  placeholder="00.000.000/0000-00">
							</div>
						</div>
						<button type="submit" class="btn btn-primary ">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>