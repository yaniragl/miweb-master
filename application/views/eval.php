<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Matricula</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/estilos.css">

    <script type="text/javascript" src="<?php echo base_url();?>js/miscript.js">
        
    </script>

</head>
<body id="cuerpo">
        <div id="menu">
        <button type="button" onclick="esconder()" id="boton1">Ejercicio1</button><p>
        <button type="button" onclick="mostrar()" id="boton2">Ejercicio2</button><p>
        <button type="button" onclick="cambiar()" id="boton3">Ejercicio3</button><p>

        <div id="div"></div>
        </div>
      <!-- <?php //echo form_open("Welcome/validar")?>-->
      <form>

		<h1>Matricula</h1>
		<fieldset id="matricula">
			<legend>Matricula</legend>
			<label>Carrera</label>
			<select>
				<optgroup>
					<option>Computacion</option>
					<option>Administracion</option>
					<optgroup>Geomineria</optgroup>
				</optgroup>
			</select>

			<label>Semestre</label>
			<select>
				<optgroup>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
				</optgroup>
			</select>
		</fieldset>

		<fieldset>
			<legend>Datos del Alumno</legend>
				<label id="name">Nombre</label>
				<input type="text" name="name" id="nombre">
				<label>Apellido</label>
				<input type="text" name="lastname" id="apellido">
				<label>Sexo</label>
				<input type="radio" name=""><label>Masculino</label>
				<input type="radio" name=""><label>Femenino</label>
				<label>Telefono</label>
				<input type="text" name="">
				<label>Direccion</label>
				<input type="text" name="">
		</fieldset>

		<fieldset>
			<legend>Antecedentes</legend>
			<label>Empresa</label>
			<input type="text" name="" id="empresa" oninput="company()">
			<label>Cargo</label>
			<input type="text" name="" id="cargo" onmousemove="genio()">
			<label>Observacion</label>
			<textarea></textarea>
			<input type="submit" name="submit" id="boton" />
		</fieldset>

		</form>
	<!--<?php //echo form_close() ?>-->

</body>
</html>