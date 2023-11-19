<?php
// Simulación de un servidor de inicio de sesión en PHP

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Recibe los datos del formulario
  $usuario = $_POST["username"];
  $contraseña = $_POST["password"];

  // Validación simple (¡no lo uses en un entorno de producción!)
  if ($usuario === "usuario" && $contraseña === "contraseña") {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $usuario!";
  } else {
    echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
  }
} else {
  echo "Acceso denegado";
}
?>


