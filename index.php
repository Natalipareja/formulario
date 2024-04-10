<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Formulario multipasos</title>
</head>
<body>

    <div class="progress">
        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="container">
        <form class="needs-validation" id="regiration_form" action="action.php"  method="post" novalidate>
        <!-- Informacion de la labor  -->
        <!-- El elemento fieldset (grupo de campos) permite organizar en grupos los campos de un formulario. -->
        <fieldset>
            <h2 >Paso 1: Información de la labor</h2>
            <div class="form-group">
                <label class="form-label" for="tarea">Tarea:</label>
                <select class="form-select" id="tarea" name="tarea" required>
                    <option disabled selected value="" >Seleccione una tarea</option>
                    <option>Desplazarse hacia otras zonas para hacer compras de productos</option>
                    <option>Trámites administrativos (pagos, compras, otros)</option>
                    <option>Todas las tareas</option>
                    <option>Dosificar fertilizantes</option>
                    <option>Barrer</option>
                    <option>Trapear</option>
                    <option>Sacudir</option>
                    <option>Cargue y descargue de mercancía</option>
                    <option>Ubicar bultos en estibas</option>
                    <option>Ubicar productos en estanterías</option>
                    <option>Todas las tareas</option>
                    <option>Tomar y llevar los pedidos de los clientes</option>
                    
                </select>
                <!-- Si se seleeciona una opción válida se muestra el mensaje "Correcto si no se selecciona ninguna opción se miestra el otro mensaje -->
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacío.
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="zonaLugar">Zona/lugar:</label>
                <select class="form-select" id="zonaLugar" name="zonaLugar" required>
                    <option disabled selected value="">Seleccione zona/lugar</option>
                    <option>Almacenamiento</option>
                    <option>Caja-punto de venta</option>
                    <option>Toda la zona</option>
                    <option>Externo</option>
                </select>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacío.
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="cargo">Cargo:</label>
                <select class="form-select" id="cargo" name="cargo" required>
                    <option disabled selected value="">Seleccione el cargo</option>
                    <option>Administrador</option>
                    <option>Coordinadora administrativa</option>
                    <option>Oficios varios</option>
                </select>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacío.
                </div>
            </div>
            <div class="form-group">
                <label class="form-label">¿La tarea es rutinaria?:</label>

                <div class="form-check form-check-inline m-2">
                    <input class="form-check-input" type="radio" name="rutinaria" id="si" value="si">
                    <label class="form-check-label" for="si">Si</label>
                </div>
                <div class="form-check form-check-inline m-2">
                    <input class="form-check-input" type="radio" name="rutinaria" id="no" value="no" checked>
                    <label class="form-check-label" for="no">No</label>
                </div>

            </div>
            <input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
    
        </fieldset>

        <!-- información del peligro listas desplegables -->
        <fieldset>
            <h2> Paso 2: Información del Peligro</h2>
            <div class="form-group">
                <label class="form-label" for="clasificacion">Clasificación del peligro:</label>
                <select class="form-control" id="clasificacion" name="clasificacion" required>
                    <option disabled selected value="">Seleccione la clasificación del peligro</option> 
                    <option value="biologico">Biologico</option>
                    <option value="fisico">Fisico</option>
                    <option value="quimico">Quimico</option>
                    <option value="psicosocial">Psicosocial</option>
                    <option value="biomecanico">Biomecanico</option>
                    <option value="condiciones de seguridad">Condiciones de seguridad</option>
                    <option value="fenomenos naturales">Fenomenos naturales</option>
                </select>
                <div class="valid-feedback">
                    ¡Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacío.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Biologico:</label>
                <select class="descripcion-peligro hidden" id="descripcion_biologico" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Biologico</option>
                    <option>Virus animales roedores</option>
                    <option>Hongos</option>
                    <option>Bacterias</option>
                    <option>Ricketsias</option>
                    <option>Parásitos</option>
                    <option>Picaduras</option> 
                    <option>Mordeduras</option> 
                    <option>Fluidos o excrementos</option> 
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Físico:</label>
                <select class="descripcion-peligro hidden" id="descripcion_fisico" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Fisico</option>
                    <option>Ruido (De impacto, intermitente, continuo)</option>
                    <option>Iluminación (Luz visible por exceso o deficiencia)</option>
                    <option>Vibración (Cuerpo entero, segmentaria)</option>
                    <option>Temperaturas extremas (Calor y frío)</option>
                    <option>Presión atmosférica (Normal y ajustada)</option>
                    <option>Radiaciones ionizantes (Rayos x, gama, beta y alfa)</option> 
                    <option>Radiaciones no ionizantes (Laser, ultravioleta, infrarroja, radiofrecuencia, microondas)</option> 
                    <option>Fluidos o excrementos</option> 
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>


            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Quimico:</label>
                <select class="descripcion-peligro hidden" id="descripcion_quimico" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Quimico</option>
                    <option>Polvos orgánicos e inorgánicos</option>
                    <option>Fibras</option>
                    <option>Líquidos (nieblas y rocíos)</option>
                    <option>Gases y vapores</option>
                    <option>Humos metálicos, no metálicos</option>
                    <option>Material particulado</option> 
                    <option>Vapores</option> 
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>


            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Psicosocial:</label>
                <select class="descripcion-peligro hidden" id="descripcion_psicosocial" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Psicosocial</option>
                    <option>Gestión Organizacional (estilo de mando, pago, contratación, participación, inducción y capacitación, bienestar social, evaluación del desempeño, manejo de cambios)</option>
                    <option>Características de la organización del trabajo (comunicación, tecnología, organización del trabajo, demandas cualitativas y cuantitativas de la labor)</option>
                    <option>Características del grupo social de trabajo (relaciones, cohesión, calidad de interacciones, trabajo en equipo).</option>
                    <option>Condiciones de la tarea (carga mental, contenido de la tarea, demandas emocionales, sistemas de control, definición de roles, monotonía, etc.)</option>
                    <option>Interfase persona - tarea (conocimientos, habilidades en relación con la demanda de la tarea, iniciativa, autonomía y reconomiento, identificación de la persona con la tarea y la organización)</option>
                    <option>Jornada de trabajo (pausas, trabajo nocturno, rotación, horas extras, descansos)</option> 
                    
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Biomecánico:</label>
                <select class="descripcion-peligro hidden" id="descripcion_biomecanico" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Biomecánico</option>
                    <option>Postura (prolongadas, mantenida, forzada y anti gravitacional)</option>
                    <option>Esfuerzo</option>
                    <option>Movimiento repetitivo</option>
                    <option>Manipulación de cargas</option>
                    <option>Máquinas</option>
                    <option>Equipos herramientas</option> 
                    <option>Espacios reducidos</option> 
                    <option>Caídas a distinto nivel o sobre nivels</option> 
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>
            
            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Condiciones de Seguridad:</label>
                <select class="descripcion-peligro hidden" id="descripcion_condiciones" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Condiciones de Seguridad</option>
                    <option>Virus animales roedores</option>
                    <option>Mecánico (elementos o partes de maquinas, herramientas, equipos, piezas a trabajar, materiales proyectados sólidos o fluidos)</option>
                    <option>Eléctrico (alta y baja tensión, estática)</option>
                    <option>Locativo (sistema y medios de almacenamiento), superficies de trabajo (irregulares, deslizantes, con diferencia del nivel), condiciones de orden y aseo, (caídas de objeto)</option>
                    <option>Tecnológico (explosión, fuga, derrame, incendio)</option>
                    <option>Accidentes de tránsito</option> 
                    <option>Públicos (robos, atracos, asaltos, atentados, de orden público, etc.)</option> 
                    <option>Trabajos en alturas</option> 
                    <option>Espacios confinados</option>

                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label" for="descripcion">Descripción del peligro Fenómenos naturales:</label>
                <select class="descripcion-peligro hidden" id="descripcion_fenomenos" name="descripcion" required>
                    <option disabled selected value="">Seleccione la descripción del peligro Fenómenos naturales</option>
                    <option>Sismo</option>
                    <option>Terremoto</option>
                    <option>Vendabal</option>
                    <option>Inundación</option>
                    <option>Precipitaciones,(lluvias, granizadas, heladas)</option>
                    <option>Sequias</option> 
                    <option>Huracanes</option> 
                    <option>Zunamis</option> 
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>

            <!-- Detalle y efectos: digitar -->
            <div class="form-group">
                <label class="form-label" for="efectos">Relacione a continuación el detalle del peligro: </label>
                <input type="text" class="form-control" placeholder="Detalle peligro" id="detalle" name="detalle" required >
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>            
            <div class="form-group">
                <label class="form-label" for="efectos">Relacione a continuación los efectos posibles: </label>
                <input type="text" class="form-control" placeholder="Efectos posibles" id="efectos" name="efectos" required >
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>

            <!-- Botones de atras y siguiente -->
            <input type="button" name="previous" class="previous btn btn-secondary" value="Atrás" />
            <input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
        </fieldset>


        <!-- 3. Controles existentes -->
        <fieldset>
            <h2>Paso 3: Controles existentes</h2>
            <div class="form-group">
                <label class="form-label" for="control_fuente">Controles en la Fuente:</label>
                <input type="text" class="form-control" id="control_fuente" name="control_fuente" placeholder="Medidas de control que se establecen en la fuente generadora del riesgo. Por ejemplo: El rediseño de un proceso."/> 
                
                <label class="form-label" for="control_medio">Controles en el Medio:</label>
                <input type="text" class="form-control" id="control_medio"name="control_medio" placeholder="Medidas de control que se establecen entre la fuente y las personas. Por ejemplo: El uso de ayudas mecánicas para mover objetos pesados."/> 
                 
                <label class="form-label" for="control_individuo">controles en el Individuo:</label>
                <input type="text" class="form-control" id="control_individuo" name="control_individuo" placeholder="Medidas de control que aplican en las personas. Por ejemplo: Limitación del tiempo de exposición al riesgo"/> 
                
                <label class="form-label" for="expuestos">Relacione el número de expuestos:</label>
                <input type="number" class="form-control" id="expuestos" name="expuestos" placeholder="Indique la cantidad de afectados"/> 
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div> 

             <!-- Botones de atras y siguiente -->    
            </div>
            <input type="button" name="previous" class="previous btn btn-secondary" value="Atrás" />
            <input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
        </fieldset>


        <!-- 4. Evaluación del riesgo -->
        <fieldset>
            <h2>Paso 4: Evaluación del Riesgo:</h2>
            <div class="form-group">
                <label class="form-label" for="nivel_deficiencia">Nivel de deficiencia:</label>
                <select class="form-select" id="nivel_deficiencia" name="nivel_deficiencia" required>
                    <option disabled selected value="">Seleccione el nivel de deficiencia</option>
                    <option>10. Muy Alto (MA):Se ha (n) detectado peligro (s) que determina(n) como posible la generación de incidentes  o la eficacia del conjunto de medidas preventivas existentes respecto al riesgo es nula o no existe, o ambos.</option>
                    <option>6. Alto (A):Se ha (n) detectada algún (os) peligro (s) que pueden dar lugar a incidentes significativa(s), o la eficacia del conjunto de medidas preventivas existentes es moderada, o ambos.</option>
                    <option>2. Medio (M):Se han detectado peligros que pueden dar lugar a incidentes poco significativas o de menor importancia, o la eficacia del conjunto de medidas preventivas existentes es moderada, o ambas.</option>
                    <option>0. Bajo (B):No se ha detectado peiigro o la eficacia del conjunto de medidas preventivas existentes es alta, o ambas. El riesgo está controlado.  Estos peligros se clasifican directamente en el nivel de riesgo y de intervención cuatro (IV)</option>       
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="nivel_exposicion">Nivel de exposición:</label>
                <select class="form-select" id="nivel_exposicion" name="nivel_exposicion" required>
                    <option disabled selected value="">Seleccione el nivel de exposición</option>
                    <option>4. Continua (EC):La situación de exposición se presenta sin interrupción o varias veces con tiempo prolongado durante la jornada laboral.</option>
                    <option>3. Frecuente (EF):La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos.</option>
                    <option>2. Ocasional (EO):La situación de exposición se presenta varias veces durante la jornada laboral por tiempos cortos.</option>
                    <option>1. Esporádica (EE):La situación de exposición se presenta de manera eventual.</option>
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="nivel_consecuencia">Nivel de consecuencia:</label>
                <select class="form-select" id="nivel_consecuencia" name="nivel_consecuencia" required>
                    <option disabled selected value="">Seleccione el nivel de consecuencia</option>
                    <option>100. Mortal o catastrófico (M).</option>
                    <option>60. Lesiones o enfermedades graves irreparables (incapacidad permanente parcial o invalidez)</option>
                    <option>25. Lesiones o enfermedades con incapacidad laboral temporal (ILT).</option>
                    <option>10. Lesiones o enfermedades que no requieren incapacidad.</option>
                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>
            </div>

             <!-- Botones de atras y siguiente -->
            <input type="button" name="previous" class="previous btn btn-secondary" value="Atrás" />
            <input type="button" name="next" class="next btn btn-primary" value="Siguiente" />
        </fieldset>

                <!-- Medidas de intervención  -->
        <fieldset>
            <h2>Paso 5: Medidas de Intervención:</h2>
            <div class="form-group">
                <label class="form-label" for="eliminacion">Eliminación:</label>
                <input type="text" class="form-control" id="eliminacion" name="eliminacion" placeholder="Medida que se toma para suprimir (hacer desaparecer) el peligro/riesgo.">
                <!-- Textbox para ingresar medidas de sustitución -->
                <label class="form-label" for="sustitucion">Sustitución: </label>
                <input type="text" class="form-control" id="sustitucion" name="sustitucion" placeholder="Medida que se toma a fin de remplazar un peligro por otro que no genere riesgo.">
                <!-- Textbox para ingresar medidas de controles de ingenieria -->
                <label class="form-label" for="control_ingenieria">Controles de ingeniería: </label>
                <input type="text" class="form-control" id="control_ingenieria" name="control_ingenieria" placeholder="Medidas técnicas para el control del peligro/riesgo en su origen (fuente) o en el medio, tales como el confinamiento (encerramiento) de un  peligro o un proceso de trabajo, aislamiento de un proceso peligroso o del trabajador y la ventilación (general y localizada), entre otros).">
                <!-- Textbox para ingresar medidas de controles administrativos-->
                <label class="form-label" for="control_administrativo">Controles administrativos: </label>
                <input type="text" class="form-control" id="control_administrativo" name="control_administrativo" placeholder="Medidas que tienen como fin reducir el tiempo de exposición al peligro, tales como la rotación de personal, cambios en la duración o tipo de la jornada de trabajo. Incluyen también la señalización, advertencia, demarcación de zonas de riesgo, implementación de sistemas de alarma, diseño e implementación de procedimientos y trabajos seguros, controles de acceso a áreas de riesgo, permisos de trabajo, entre otros">
            </div>
            <div class="form-group">
                <label class="form-label" for="epp">Elementos de protección personal: </label>
                <select class="form-select" id="epp" name="epp" required>
                    <option disabled selected value="">Seleccione el elemento de protección personal</option>
                    <option>1.Casco de seguridad</option>
                    <option>2.Protección visual</option>
                    <option>3.Protección auditiva</option> 
                    <option>4.Protección respiratoria para material particulado</option>
                    <option>5.Protección respiratoria para gases y vapores</option>
                    <option>6.Protección respiratoria desechable</option>
                    <option>7.Delantal impermeable</option> 
                    <option>8.Guantes impermeable</option> 
                    <option>9.Guantes antideslizantes</option> 
                    <option>10.Guantes anticorte</option> 
                    <option>11.Guantes resistentes a químicos</option> 
                    <option>12.Calzado con puntera de seguridad</option> 
                    <option>13.Botas impermeables</option> 

                </select>
                <div class="valid-feedback">
                    Correcto!
                </div>
                <div class="invalid-feedback">
                    No puedes dejar este campo vacio.
                </div>

            </div>

            <input type="button" name="previous" class="previous btn btn-secondary" value="Atrás" />
            <input type="submit" name="submit" class="submit btn btn-success" value="Enviar" />
        </fieldset>
        </form>

    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()

        <!-- Script personalizado -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener el elemento de selección de clasificación
            var clasificacionSelect = document.getElementById('clasificacion');
            // Obtener el elemento de selección de descripción
            var descripcionSelect = document.getElementById('descripcion');

            // Asignar un evento change al select de clasificación
            clasificacionSelect.addEventListener('change', function() {
                // Obtener el valor seleccionado
                var selectedOption = clasificacionSelect.options[clasificacionSelect.selectedIndex].value;
                // Ocultar todas las descripciones
                var descripciones = document.querySelectorAll('.descripcion-peligro');
                descripciones.forEach(function(descripcion) {
                    descripcion.classList.add('hidden');
                });
                // Mostrar la descripción correspondiente al valor seleccionado
                var descripcionToShow = document.getElementById('descripcion_' + selectedOption);
                if (descripcionToShow) {
                    descripcionToShow.classList.remove('hidden');
                }
            });
        });
    </script>

    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="main.js"></script>

    <!-- *********************Scripts de Bootstrap *************** revisa esto y porque se ponene aqui-->
        <!--ste script proporciona la funcionalidad de jQuery, una biblioteca de JavaScript, que es necesaria para que algunos componentes de Bootstrap funcionen correctamente. jQuery simplifica la manipulación del DOM y la interacción con el contenido de la página.-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!--Popper.js es una biblioteca que Bootstrap utiliza para gestionar el posicionamiento de los elementos emergentes y desplegables. Ayuda a garantizar que estos elementos se muestren correctamente y se ajusten al contenido y al espacio disponible en la pantalla.-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <!--Este script incluye todo el código JavaScript necesario para que los componentes de Bootstrap, como los desplegables, los botones de navegación y los modales, funcionen correctamente. Bootstrap JavaScript agrega interactividad y comportamiento dinámico a los elementos de la página web, permitiendo una experiencia de usuario mejorada y consistente-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>