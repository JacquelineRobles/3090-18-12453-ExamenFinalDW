// (function(){
var formulario = document.getElementById('formulario'),

    usuario = formulario.usuario,
    contrasenia = formulario.contrasenia,
    nombre = formulario.nombre,
    correo = formulario.correo,
    tipo_usuario = formulario.tipo_usuario,
    error = document.getElementById('error');

function validarUsuario(e) {
    if (usuario.value == '' || usuario.value == null) {
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el usuario</li>';
        console.log('Por favor completa el usuario');

        e.preventDefault();
    } else {
        error.style.display = 'none';
    }
}




function validarContrasenia(e) {
    if (contrasenia.value == '' || contrasenia.value == null) {
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa la contrasenia</li>';
        console.log('Por favor completa la contrasenia');

        e.preventDefault();
    } else {
        error.style.display = 'none';
    }
}

function validarNombre(e) {
    if (nombre.value == '' || nombre.value == null) {
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el nombre</li>';
        console.log('Por favor completa el nombre');

        e.preventDefault();
    } else {
        error.style.display = 'none';
    }
}

function validarCorreo(e) {
    if (correo.value == '' || correo.value == null) {
        error.style.display = 'block';
        error.innerHTML += '<li>Por favor completa el correo</li>';
        console.log('Por favor completa el correo');

        e.preventDefault();
    } else {
        error.style.display = 'none';
    }
}



// Funcion encargada de validar todos los campos
function validarForm(e) {
    // Reiniciamos el error para que inicie sin mensaje.
    error.innerHTML = '';

    validarUsuario(e)
    validarContrasenia(e)
    validarNombre(e)
    validarCorreo(e)
}

formulario.addEventListener('submit', validarForm);
// }())