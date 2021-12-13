<div class="container">
	<form action="<?=base_url()?>localidad/cPost" method="post">
		<h1>Nueva Localidad</h1>
		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" autofocus="autofocus"/>
		<br/>
		<br/>
		<select name="provincia">
		<option value="madrid">Madrid</option>
		<option value="segovia">Segovia</option>
		<option value="zaragoza">Zaragoza</option>
		<option value="badajoz">Badajoz</option>
		</select>
		<br/>
		<br/>
		<input type="submit"/>
		
	</form>
</div>