<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de Ajax</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<h1>Ejemplo de Ajax</h1>

<button onclick="cargarContenido()">Cargar Contenido</button>

<div id="contenido"></div>

<script>
function cargarContenido() {
  $.ajax({
    url: "contenido.txt",  // Cambia esto al nombre de tu archivo de texto
    method: "GET",
    success: function(data) {
      $("#contenido").html(data);
    },
    error: function() {
      alert("Error al cargar el contenido");
    }
  });
}
</script>

</body>
</html>

