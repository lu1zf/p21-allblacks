<div class="container-fluid">
  <h1 class="mt-5 mb-5 text-center">Atualizar dados</h1>
  
  <div class="row justify-content-center mb-5">
    <div class="col-12 col-md-8">
      <form action="<?= $url ?>" method="POST">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input class="form-control" name="nome" id="nome" value="<?= $fan['nome'] ?? '' ?>"/>
        </div>
        <div class="mb-3">
          <label for="documento" class="form-label">Documento</label>
          <input type="text" class="form-control" name="documento" id="documento" value="<?= $fan['documento'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="cep" class="form-label">Cep</label>
          <input type="text" class="form-control" name="cep" id="cep" value="<?= $fan['cep'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="endereco" class="form-label">Endereço</label>
          <input type="text" class="form-control" name="endereco" id="endereco" value="<?= $fan['endereco'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="bairro" class="form-label">Bairro</label>
          <input type="text" class="form-control" name="bairro" id="bairro" value="<?= $fan['bairro'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="cidade" class="form-label">Cidade</label>
          <input type="text" class="form-control" name="cidade" id="cidade" value="<?= $fan['cidade'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="uf" class="form-label">UF</label>
          <input type="text" class="form-control" name="uf" id="uf" value="<?= $fan['uf'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="telefone" class="form-label">Telefone</label>
          <input type="text" class="form-control" name="telefone" id="telefone" value="<?= $fan['telefone'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="text" class="form-control" name="email" id="email" value="<?= $fan['email'] ?? '' ?>">
        </div>
        <div class="mb-3">
          <label for="ativo" class="form-label">Ativo</label>
          <select class="form-select" aria-label="Default select example" name="ativo">
            <?php if(isset($fan['ativo']) && $fan['ativo'] == 'SIM'): ?>
              <option value="SIM" selected>Sim</option>
              <option value="NÃO">Não</option>
            <?php elseif(isset($fan['ativo']) && $fan['ativo'] == 'NÃO'): ?>
              <option value="SIM">Sim</option>
              <option value="NÃO" selected>Não</option>
            <?php else: ?>
              <option value="SIM" selected>Sim</option>
              <option value="NÃO">Não</option>
            <?php endif; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
</div>