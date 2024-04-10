<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formularios</title>
</head>
<body>

<h1>Formularios Nata</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario y procesarlos aquí
    // Guarda los datos recibidos en una variable o en una base de datos
    // Puedes acceder a los datos utilizando $_POST
    // Luego redirige o muestra un mensaje de confirmación
    // Ejemplo:
    // $tarea = $_POST["tarea"];
    // $zona = $_POST["zona"];
    // ...
    echo "<p>Formulario enviado exitosamente.</p>";
} else {
    echo '
    <form action="action.php" method="post">
        <button type="submit" name="submit" value="1">1. Información de Labor</button>
    </form>
    ';
}
?>

<?php if ($_POST["submit"] == "2" || !isset($_POST["submit"])): ?>
<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>1. Información de Labor</h2>
        <label for="tarea">Tarea:</label>
        <select id="tarea" name="tarea" required>
            <option value="tarea1">Tarea 1</option>
            <option value="tarea2">Tarea 2</option>
        </select><br>
        <label for="zona">Zona/Lugar:</label>
        <select id="zona" name="zona" required>
            <option value="zona1">Zona 1</option>
            <option value="zona2">Zona 2</option>
        </select><br>
        <label for="cargo">Cargo:</label>
        <select id="cargo" name="cargo" required>
            <option value="cargo1">Cargo 1</option>
            <option value="cargo2">Cargo 2</option>
        </select><br>
        <label>¿La tarea es rutinaria?</label><br>
        <input type="radio" id="si" name="rutinaria" value="si" required>
        <label for="si">Sí</label>
        <input type="radio" id="no" name="rutinaria" value="no" required>
        <label for="no">No</label><br>
        <button type="submit" name="submit" value="2">2. Información de Peligro</button>
    </form>
</div>
<?php endif; ?>

<div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>2. Información de Peligro</h2>
        <label for="peligro">Clasificacion del peligro:</label>
        <select id="peligro" name="peligro" required>
            <option value="Biologico">Tarea 1</option>
            <option value="Mecanico">Tarea 2</option>
        </select><br>
        <label for="descripcion">descripcion del peligro:</label>
        <select id="descipcion" name="descripcion" required>
            <option value="descripcion1">Mecanico</option>
            <option value="descripcion2">Locativo</option>
        </select><br>
        <label>Deatlle  peligro</label><br>
        <label>Efectos  peligro</label><br>
        
        <button type="submit" name="submit" value="2">2. Información de Peligro</button>
    </form>
</div>
 ?>
<!-- Repetir la estructura para los demás formularios validar -->

</body>
</html>
