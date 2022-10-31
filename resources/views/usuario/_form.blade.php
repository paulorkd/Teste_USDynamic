<div class="container">
	<div class="row">
		<div class="col">
			Nome <input type="text" class="form-control"  placeholder="Nome" name = "name" required value="{{isset($registro->name) ? $registro->name: ''}}">
		</div>
		<div class="col col-lg-2">
						Nivel <select class="custom-select" name = "tipo" >
										<option>Administrador</option>
										<option>Usuario</option>
									</select>
		</div>
	</div>
	<div class="row">
		<div class="col">
			Email <input type="email" class="form-control"  placeholder="Email" name = "email" required value="{{isset($registro->email) ? $registro->email: ''}}">
		</div>
		<div class="col">
			Senha <input type="password" class="form-control"  placeholder="Senha" name = "password" ">
		</div>
	</div>
</div>