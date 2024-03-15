function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellidos = document.getElementById("apellidos").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var mensaje = document.getElementById("mensaje").value;
  
    if (nombre == "" || apellidos == "" || email == "" || telefono == "" || mensaje == "") {
      alert("Por favor, complete todos los campos del formulario.");
      return false;
    }
  
   // Enviar el formulario
    alert('Formulario enviado correctamente.');
    return true;
  }
  