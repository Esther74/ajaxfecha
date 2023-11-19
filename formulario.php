<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de Sesión</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<h1>Iniciar Sesión</h1>

<form id="loginForm">
  <label for="username">Usuario:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Contraseña:</label>
  <input type="password" id="password" name="password" required>

  <button type="button" onclick="enviarFormulario()">Iniciar Sesión</button>

  <div id="mensaje"></div>
</form>

<script>
function enviarFormulario() {
  var usuario = $("#username").val();
  var contraseña = $("#password").val();

  $.ajax({
    url: "login.php", // Cambia esto a la URL de tu servidor de inicio de sesión
    method: "POST",
    data: { username: usuario, password: contraseña },
    success: function(respuesta) {
      $("#mensaje").html(respuesta);
    },
    error: function() {
      $("#mensaje").html("Error al procesar la solicitud");
    }
  });
}
</script>

</body>
</html>

