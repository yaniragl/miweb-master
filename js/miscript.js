function esconder() {
   document.getElementById("matricula").style.display = "none";
}

function mostrar() {
   document.getElementById("matricula").style.display = "block";
}

function cambiar() {
   document.getElementById("name").innerHTML = 'Nombre Completo';
}

function crear() {
   document.getElementById("div").innerHTML = '<button>Nuevo</button>';
}

function resaltar() {
   document.getElementById("empresa").style.borderColor = "#39ff14";
}

function color() {
   document.getElementById("boton").style.backgroundColor = "#39ff14";
}

function fondo() {
   document.getElementById("cuerpo").style.backgroundColor = "#39ff14";
}

function company() {
  alert("Debe ser una empresa Real");
}

function genio() {
	alert('Voy a ser un genio en JavaScript');
}



function disable()
{
	document.getElementById("boton1").disabled = true;
	document.getElementById("boton1").style.backgroundColor = "#adad85";
	document.getElementById("boton3").disabled = true;
	document.getElementById("boton3").style.backgroundColor = "#adad85";
	document.getElementById("boton4").disabled = true;
	document.getElementById("boton4").style.backgroundColor = "#adad85";
	document.getElementById("boton6").disabled;
	document.getElementById("boton7").disabled;
}

function validar()
{
	var Name = document.getElementById("nombre").value;
	var Apellido = document.getElementById("apellido").value;

	if (Name == null || Name.lenght == 0 || Name == "") {
		alert('Debe ingresar un Nombre');
		return false;
	}
	else{
		if (Apellido == null || Apellido.lenght == 0 || Apellido == "") {
		alert('Debe ingresar un Apellido');
		return false;
		}
		else{
			alert('ok');
		}
	}
}

