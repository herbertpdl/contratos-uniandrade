<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="form">
        <h3>TERMO DE COMPROMISSO DE ESTÁGIO OBRIGATÓRIO</h3>					
        <p>Por favor, insira abaixo os dados.</p>
        <form action="Formulario/gerarPdfObrigatorio" method="POST">
          <div class="form-group">
            <h4>DADOS REFERENTES À INSTITUIÇÃO DE ENSINO</h4>
            <div class="form-group" style="margin-bottom: 50px;">
              <label for="nome">Nome do coordenador(a) do curso</label>
              <input required type="text" name="nameCoord" class="form-control"  placeholder="Nome do coordenador(a)">
            </div>
            <h4>DADOS REFERENTES À UNIDADE CEDENTE (EMPRESA)</h4>
            <div class="form-group">
              <label for="nome">Nome da unidade cedente <strong>(empresa)</strong></label>
              <input required type="text" name="nameCompany" class="form-control"  placeholder="Nome da unidade cedente (empresa)">
            </div>
            <div class="form-group">
              <label for="cepCompany">CEP</label>
              <input required type="text" id="cepCompany" name="cepCompany" maxlength="9" class="form-control"  placeholder="00.000-000">
            </div>
            <div class="form-group">
              <label for="phoneCompany">Fone</label>
              <input required type="text" id="phoneCompany" name="phoneCompany" maxlength="9" class="form-control"  placeholder="(00) 0000-0000">
            </div>
            <div class="form-group">
              <label for="addressCompany">Endereço</label>
              <input required type="text" id="addressCompany" name="addressCompany" class="form-control"  placeholder="Endereço">
            </div>
            <div class="form-group">
              <label for="neighborhoodCompany">Bairro</label>
              <input required type="text" id="neighborhoodCompany" name="neighborhoodCompany" class="form-control"  placeholder="Bairro">
            </div>
            <div class="form-group">
              <label for="stateCompany">Estado</label>
              <input required type="text" id="stateCompany" name="stateCompany" maxlength="2" class="form-control"  placeholder="Sigla do estado">
            </div>
            <div class="form-group">
              <label for="cityCompany">Cidade</label>
              <input required type="text" id="cityCompany" name="cityCompany" class="form-control"  placeholder="Cidade">
            </div>
            <div class="form-group">
              <label for="cnpj">CNPJ/MF</label>
              <input required type="text" id="cnpj" name="cnpj" class="form-control"  placeholder="00.000.000/0000-00">
            </div>
            <div class="form-group">
              <label for="responsavelCompany">Responsável</label>
              <input required type="text" id="responsavelCompany" name="responsavelCompany" class="form-control"  placeholder="Nome do responsável">
            </div>
            <div class="form-group">
              <label for="cargoResponsavel">Cargo do responsável</label>
              <input required type="text" id="cargoResponsavel" name="cargoResponsavel" class="form-control"  placeholder="Cargo do responsável">
            </div>
            <div class="form-group">
              <label for="supervisor">Supervisor de estágio</label>
              <input required type="text" id="supervisor" name="supervisor" class="form-control"  placeholder="Nome do supervisor">
            </div>
            <div class="form-group">
              <label for="supervisorForma">Formação do supervisor de estágio</label>
              <input required type="text" id="supervisorForma" name="supervisorForma" class="form-control"  placeholder="Formação do supervisor">
            </div>
            <div class="form-group">
              <label for="location">Local de estágio</label>
              <input required type="text" id="location" name="location" class="form-control"  placeholder="Local de estágio">
            </div>
            <h4>DADOS REFERENTES AO ESTAGIÁRIO</h4>
            <div class="form-group">
              <label for="studentCPF">CPF</label>
              <input required type="text" id="studentCPF" name="studentCPF" class="form-control"  placeholder="000.000.000-00">
            </div>
            <div class="form-group">
              <label for="birthDate">Data de nascimento</label>
              <input required type="text" id="birthDate" name="birthDate" class="form-control"  placeholder="DD/MM/AAAA">
            </div>
            <div class="form-group">
              <label for="studentAdress">Endereço</label>
              <input required type="text" id="studentAdress" name="studentAdress" class="form-control"  placeholder="Endereço">
            </div>
            <div class="form-group">
              <label for="studentCity">Cidade</label>
              <input required type="text" id="studentCity" name="studentCity" class="form-control"  placeholder="Cidade">
            </div>
            <div class="form-group">
              <label for="studentState">Estado</label>
              <input required type="text" id="studentState" name="studentState" class="form-control"  placeholder="Sigla do estado">
            </div>
            <div class="form-group">
              <label for="studentNeighbor">Bairro</label>
              <input required type="text" id="studentNeighbor" name="studentNeighbor" class="form-control"  placeholder="Bairro">
            </div>
            <div class="form-group">
              <label for="studentZip">CEP</label>
              <input required type="text" id="studentZip" name="studentZip" class="form-control"  placeholder="00.000-000">
            </div>
            <div class="form-group">
              <label for="studentPhone">FONE</label>
              <input required type="text" id="studentPhone" name="studentPhone" class="form-control"  placeholder="(00) 0000-0000">
            </div>
            <div class="form-group">
              <label for="studentCourse">CURSO</label>
              <input required type="text" id="studentCourse" name="studentCourse" class="form-control"  placeholder="Curso">
            </div>
            <div class="form-group">
              <label for="schoolYear">ANO LETIVO</label>
              <input required type="text" id="schoolYear" name="schoolYear" class="form-control"  placeholder="Ano letivo">
            </div>
            <div class="form-group">
              <label for="period">PERIODO</label>
              <input required type="text" id="period" name="period" class="form-control"  placeholder="Período">
            </div>
          </div>
          <button type="submit" class="btn btn-primary ">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>