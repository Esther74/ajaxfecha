<!-- index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP y Ajax</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<h1>PHP y Ajax</h1>

<button onclick="obtenerDatos()">Obtener Datos</button>

<div id="resultado"></div>

<script>
function obtenerDatos() {
  $.ajax({
    url: "datos.php",
    method: "GET",
    success: function(data) {
      $("#resultado").html(data);
    }
  });
}
</script>

</body>
</html>
