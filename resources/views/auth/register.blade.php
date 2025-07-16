@extends('layout.main')

@section('title','CREATE EVENT')

@section('content')

  <div class="container my-5" style="max-width: 900px;">
    <form>
      <div class="text-center mb-4">
        <img src="/img/CD_Costa_do_Sol.png" alt="CD Costa do Sol" style="max-width: 120px;" />
      </div>

      <!-- Dados Pessoais -->
      <h5 class="mb-3">Dados Pessoais</h5>
      <div class="row g-3 mb-4">
        <div class="col-md-5">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" id="nome" class="form-control" required />
        </div>
        <div class="col-md-3">
          <label for="nascimento" class="form-label">Data de Nascimento</label>
          <input type="date" id="nascimento" class="form-control" required />
        </div>
        <div class="col-md-4">
          <label for="sexo" class="form-label">Sexo</label>
          <select id="sexo" class="form-select" required>
            <option value="" disabled selected>Selecione</option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Outro</option>
          </select>
        </div>

        <div class="col-md-4">
          <label for="estadoCivil" class="form-label">Estado Civil</label>
          <input type="text" id="estadoCivil" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="naturalidade" class="form-label">Naturalidade</label>
          <input type="text" id="naturalidade" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="nacionalidade" class="form-label">Nacionalidade</label>
          <input type="text" id="nacionalidade" class="form-control" />
        </div>
      </div>

      <!-- Endereço Residencial -->
      <h5 class="mb-3">Endereço Residencial</h5>
      <div class="row g-3 mb-4">
        <div class="col-md-5">
          <label for="endereco" class="form-label">Endereço (Av/Rua)</label>
          <input type="text" id="endereco" class="form-control" />
        </div>
        <div class="col-md-3">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" id="bairro" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="cidade" class="form-label">Cidade</label>
          <input type="text" id="cidade" class="form-control" />
        </div>

        <div class="col-md-4">
          <label for="pais" class="form-label">País</label>
          <input type="text" id="pais" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="telefoneCasa" class="form-label">Telefone de Casa</label>
          <input type="tel" id="telefoneCasa" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="telemovel" class="form-label">Telemóvel</label>
          <input type="tel" id="telemovel" class="form-control" />
        </div>

        <div class="col-12">
          <label for="email" class="form-label">Email</label>
          <input type="email" id="email" class="form-control" />
        </div>
      </div>

      <!-- Informação Profissional -->
      <h5 class="mb-3">Informação Profissional</h5>
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="profissao" class="form-label">Profissão</label>
          <input type="text" id="profissao" class="form-control" />
        </div>
        <div class="col-md-6">
          <label for="instituicao" class="form-label">Instituição</label>
          <input type="text" id="instituicao" class="form-control" />
        </div>
        <div class="col-md-5">
          <label for="enderecoProf" class="form-label">Endereço (Av/Rua)</label>
          <input type="text" id="enderecoProf" class="form-control" />
        </div>
        <div class="col-md-3">
          <label for="bairroProf" class="form-label">Bairro</label>
          <input type="text" id="bairroProf" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="cidadeProf" class="form-label">Cidade</label>
          <input type="text" id="cidadeProf" class="form-control" />
        </div>
      </div>

      <!-- Documentos -->
      <h5 class="mb-3">Documentos</h5>
      <div class="row g-3 mb-4">
        <div class="col-md-4">
          <label for="bi" class="form-label">BI/DIRE Nº</label>
          <input type="text" id="bi" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="biEmitido" class="form-label">Emitido aos</label>
          <input type="date" id="biEmitido" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="biValido" class="form-label">Válido até</label>
          <input type="date" id="biValido" class="form-control" />
        </div>

        <div class="col-md-4">
          <label for="passaporte" class="form-label">Passaporte Nº</label>
          <input type="text" id="passaporte" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="passaporteEmitido" class="form-label">Emitido aos</label>
          <input type="date" id="passaporteEmitido" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="passaporteValido" class="form-label">Válido até</label>
          <input type="date" id="passaporteValido" class="form-control" />
        </div>

        <div class="col-md-4">
          <label for="carta" class="form-label">Carta de Condução Nº</label>
          <input type="text" id="carta" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="cartaEmitido" class="form-label">Emitido aos</label>
          <input type="date" id="cartaEmitido" class="form-control" />
        </div>
        <div class="col-md-4">
          <label for="cartaValido" class="form-label">Válido até</label>
          <input type="date" id="cartaValido" class="form-control" />
        </div>
      </div>

      <!-- Tipo de Sócio -->
      <h5 class="mb-3">Tipo de Sócio</h5>
      <div class="row g-3 mb-4">
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="efectivo" value="1" />
            <label class="form-check-label" for="efectivo">1 - Efectivo</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="correspondente" value="2" />
            <label class="form-check-label" for="correspondente">2 - Correspondente</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="atleta" value="3" />
            <label class="form-check-label" for="atleta">3 - Atleta</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="patrocinador" value="4" />
            <label class="form-check-label" for="patrocinador">4 - Patrocinador</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="merito" value="5" />
            <label class="form-check-label" for="merito">5 - De Mérito</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="honorario" value="6" />
            <label class="form-check-label" for="honorario">6 - Honorário</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="tralhador" value="7" />
            <label class="form-check-label" for="tralhador">7 - Tralhador</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="infantil" value="8" />
            <label class="form-check-label" for="infantil">8 - Infantil</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="juvenil" value="9" />
            <label class="form-check-label" for="juvenil">9 - Juvenil</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="correspondente2" value="10" />
            <label class="form-check-label" for="correspondente2">10 - Correspondente (2)</label>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="tipo_socio" id="numero" value="11" />
            <label class="form-check-label" for="numero">11 - Número</label>
          </div>
        </div>
      </div>

      <!-- Pagamento de Quotas -->
      <h5 class="mb-3">Pagamento de Quotas</h5>
      <div class="row g-3 mb-4">
        <div class="col-md-6">
          <label for="pagamentoEfectivo" class="form-label">Efectivo</label>
          <select id="pagamentoEfectivo" class="form-select">
            <option selected>Selecione</option>
            <option>Pagamento 1</option>
            <option>Pagamento 2</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="pagamentoFutebol" class="form-label">Futebol</label>
          <select id="pagamentoFutebol" class="form-select">
            <option selected>Selecione</option>
            <option>Pagamento 1</option>
            <option>Pagamento 2</option>
          </select>
        </div>
      </div>

      <!-- Local de Pagamento -->
      <h5 class="mb-3">Local de Pagamento</h5>
      <div class="row g-3 mb-4">
        <div class="col-auto">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="local_pagamento" id="noClube" />
            <label class="form-check-label" for="noClube">No Clube</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="local_pagamento" id="emCasa" />
            <label class="form-check-label" for="emCasa">Em Casa</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="local_pagamento" id="noServico" />
            <label class="form-check-label" for="noServico">No Serviço</label>
          </div>
        </div>
        <div class="col-auto">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="local_pagamento" id="outros" />
            <label class="form-check-label" for="outros">Outros</label>
          </div>
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-5">Submeter Inscrição</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


@endsection