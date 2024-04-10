<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formularios</title>
<style>
  .hidden {
    display: none;
  }
</style>
</head>
<body>

<h1>Formularios</h1>

<button id="btn1">1. Información de Labor</button>
<div id="form1" class="hidden">
  <form id="form_labor">
    <label for="tarea">Tarea:</label>
    <select id="tarea" name="tarea">
      <option value="tarea1">Tarea 1</option>
      <option value="tarea2">Tarea 2</option>
      <!-- Agrega más opciones si es necesario -->
    </select><br>
    <label for="zona">Zona/Lugar:</label>
    <select id="zona" name="zona">
      <option value="zona1">Zona 1</option>
      <option value="zona2">Zona 2</option>
      <!-- Agrega más opciones si es necesario -->
    </select><br>
    <label for="cargo">Cargo:</label>
    <select id="cargo" name="cargo">
      <option value="cargo1">Cargo 1</option>
      <option value="cargo2">Cargo 2</option>
      <!-- Agrega más opciones si es necesario -->
    </select><br>
    <label>¿La tarea es rutinaria?</label><br>
    <input type="radio" id="si" name="rutinaria" value="si">
    <label for="si">Sí</label>
    <input type="radio" id="no" name="rutinaria" value="no">
    <label for="no">No</label><br>
    <button id="btn2" disabled>2. Información de Peligro</button>
  </form>
</div>

<button id="btn3" class="hidden">3. Controles Existentes</button>
<div id="form2" class="hidden">
  <!-- Formulario de Peligro -->
</div>

<button id="btn4" class="hidden">4. Evaluación del Riesgo</button>
<div id="form3" class="hidden">
  <!-- Formulario de Controles Existentes -->
</div>

<button id="btn5" class="hidden">5. Medidas de Intervención</button>
<div id="form4" class="hidden">
  <!-- Formulario de Evaluación del Riesgo -->
</div>

<button id="btnEnviar" class="hidden">Enviar</button>

<script>
  document.getElementById('btn1').addEventListener('click', function() {
    document.getElementById('form1').classList.remove('hidden');
  });

  document.getElementById('btn2').addEventListener('click', function() {
    document.getElementById('form2').classList.remove('hidden');
  });

  document.getElementById('btn3').addEventListener('click', function() {
    document.getElementById('form3').classList.remove('hidden');
  });

  document.getElementById('btn4').addEventListener('click', function() {
    document.getElementById('form4').classList.remove('hidden');
  });

  // Agrega eventos de validación y activación de botones adicionales

  // Una vez que se completen todos los formularios, habilita el botón de enviar
  document.getElementById('btnEnviar').addEventListener('click', function() {
    // Aquí puedes enviar la información del formulario a través de AJAX o similar
    // Puedes acceder a los datos del formulario usando document.getElementById('form_labor').elements
    // y luego enviarlos al archivo action.php
  });
</script>

</body>
</html>
