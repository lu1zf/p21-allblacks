
<div class="container-fluid">
  <h1 class="mt-5 mb-5 text-center">Importar XML</h1>
  <div class="row justify-content-center mb-5">
      <div class="col-12 col-md-8">
        <form action="<?= base_url('fans/xml') ?>" enctype="multipart/form-data" method="POST">
          <div class="mb-3">
            <label for="formFile" class="form-label">Importar XML</label>
            <input class="form-control" type="file" id="formFile" name="xml" required>
          </div>
          <button class="btn btn-primary">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>