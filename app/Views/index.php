<div class="container-fluid">
	<h1 class="text-center mt-4 mb-4">Torcedores dos All Blacks</h1>
	
	<div class="row justify-content-center mb-5">
		<div class="col-sm-12 col-md-8">
			<a class="btn btn-primary" href="<?= base_url('fans/new') ?>">Adicionar torcedor</a>
			<a class="btn btn-secondary" href="<?= base_url('fans/xml') ?>">Importar via XML</a>
			<a class="btn btn-warning" href="#">Cadastrar notícia</a>
		</div>
	</div>
	<div class="row justify-content-center mb-5">
		<div class="col-sm-12 col-md-8">
			<table class="table table-striped">
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
						<th scope="col">Ativo</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($fans as $fan): ?>
						<tr>
							<td><?= $fan['nome'] ?></td>
							<td><?= $fan['email'] ?></td>
							<td><?= $fan['ativo'] ?></td>
							<td><a href="<?= base_url('fans') . '/' . $fan['id'] ?>" class="btn btn-info text-white">Editar</a></td>
							<td><a href="<?= base_url('fans') . '/delete/' . $fan['id'] ?>" class="btn btn-danger">Excluir</a></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>