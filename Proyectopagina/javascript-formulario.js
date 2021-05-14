var nombre = document.getElementById('nombre');
var usuario = document.getElementById('usuario');
var contraseña = document.getElementById('apellidos');
var direccion = document.getElementById('direccion');
var correo = document.getElementById('correo');
var contrasena = document.getElementById('contrasena');
var contrasena2 = document.getElementById('contrasena2');
var telefono = document.getElementById('telefono');
var terminos = document.getElementById("terminos");
var detalles = document.getElementById("detalles");

function enviarFormulario(){

    if(usuario.value==""){ 
        alert('El nombre de usuario es obligatorio');
    }

    else if(contrasena.value==""){
        alert('La contraseña es obligatoria');
    }

    else if(contrasena2.value==""){
        alert('Debe confirmar la contraseña');
    }
    
    else if(contrasena.value!=contrasena2.value) {
        alert('Las contraseñas no son iguales');
    }

    else if(nombre.value=="" || nombre.value.length < 3){ 
        alert('Su nombre es obligatorio y debe tener mas de 3 letras');
    }

    else if(direccion.value==""|| !direccion.value.includes("C/")|| !direccion.value.includes("N/")|| !direccion.value.includes("P/")){
        alert('Introduzca la direccion en formato: C/ ... N/ ... P/...');
    }

    else if(correo.value=="" || !correo.value.includes("@")) {
        alert('Introduzca su correo correctamente');
    }
      
    else if(telefono.value=='' || telefono.value.length < 9 || telefono.value.length > 11)  {
        alert('El numero de telefono es obligatorio y debe tener minimo 9 numeros y maximo 11');
    }

    else if(detalles.value==''|| detalles.value.length < 20 || detalles.value.length > 500){
        alert('Los detalles tienen que tener un minimo de 20 caracteres y un maximo de 500');
    }

    else if( !terminos.checked ) {
        alert('Acepte los terminos y condiciones');
    }
    
    else {
        document.getElementById("formulario").submit();
    }
    
}
