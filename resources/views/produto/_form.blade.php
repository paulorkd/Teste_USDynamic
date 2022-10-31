<div class="container">
	<div class="row">
		<div class="col">
			Descrição <input type="text" class="form-control"  placeholder="Descricao do Produto" name = "descricao" required value="{{isset($registro->descricao) ? $registro->descricao: ''}}">
		</div>
		<div class="col">
			Valor <input type="number" class="form-control"  placeholder="Valor" name = "valor" value="{{isset($registro->valor) ? $registro->valor: ''}}">
		</div>
	</div>
</div>