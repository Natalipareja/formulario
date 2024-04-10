

$(document).ready(function(){
    var actual = 1,paso_actual,siguiente_paso,pasos;
    pasos = $("fieldset").length;
    //ejecución de boton next
    $(".next").click(function(){
      paso_actual = $(this).parent();
      siguiente_paso = $(this).parent().next();
      siguiente_paso.show();
      paso_actual.hide();
      setProgressBar(++actual);
    });
    //ejecución del boton previous
    $(".previous").click(function(){
      paso_actual = $(this).parent();
      siguiente_paso = $(this).parent().prev();
      siguiente_paso.show();
      paso_actual.hide();
      setProgressBar(--actual);
    });
    setProgressBar(actual);
    // Cambiar barra de progreso
    function setProgressBar(act_paso){
      var porcentaje = parseFloat(100 / pasos) * act_paso;
      porcentaje = porcentaje.toFixed();
      $(".progress-bar")
        .css("width",porcentaje+"%")
        .html(porcentaje+"%");   
    }
  });

