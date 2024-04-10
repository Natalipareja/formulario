document.addEventListener("DOMContentLoaded", function() {
    var actual = 1;
    var paso_actual, siguiente_paso, pasos;
    pasos = document.querySelectorAll("fieldset").length;

    // Función para mostrar el siguiente paso
    function mostrarSiguientePaso() {
        // Validar el paso actual antes de avanzar
        if (validarPaso(actual)) {
            paso_actual = this.parentElement;
            siguiente_paso = paso_actual.nextElementSibling;
            siguiente_paso.style.display = "block";
            paso_actual.style.display = "none";
            setProgressBar(++actual);
        }
    }

    // Función para mostrar el paso anterior
    function mostrarPasoAnterior() {
        paso_actual = this.parentElement;
        siguiente_paso = paso_actual.previousElementSibling;
        siguiente_paso.style.display = "block";
        paso_actual.style.display = "none";
        setProgressBar(--actual);
    }

    // Agregar eventos a los botones "Siguiente"
    var botonesSiguiente = document.querySelectorAll(".next");
    botonesSiguiente.forEach(function(boton) {
        boton.addEventListener("click", mostrarSiguientePaso);
    });

    // Agregar eventos a los botones "Anterior"
    var botonesAnterior = document.querySelectorAll(".previous");
    botonesAnterior.forEach(function(boton) {
        boton.addEventListener("click", mostrarPasoAnterior);
    });

    // Establecer la barra de progreso inicial
    setProgressBar(actual);

    // Función para cambiar la barra de progreso
    function setProgressBar(act_paso) {
        var porcentaje = parseFloat(100 / pasos) * act_paso;
        porcentaje = porcentaje.toFixed();
        document.querySelector(".progress-bar").style.width = porcentaje + "%";
        document.querySelector(".progress-bar").innerHTML = porcentaje + "%";
    }

    // Función para validar el paso actual
    function validarPaso(paso) {
        var inputs = document.querySelectorAll("fieldset:nth-of-type(" + paso + ") input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].hasAttribute("required") && inputs[i].value.trim() === "") {
                alert("Por favor complete todos los campos obligatorios.");
                return false;
            }
            // Aquí puedes agregar más validaciones según tus necesidades
        }
        return true;
    }
});

   
