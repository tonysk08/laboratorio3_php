<?php
    //inicia una sesion para guardar datos
    include('cookie\sesion.php');

    //se capturan los valores emviados y se guardan en variables
    
    echo $name, "<br>";
    echo $lastName,"<br>";
    echo $dni, "<br>";
    echo $pagoXhora, "<br>";
    echo $horasXsemana, "<br>";

    //se calcula el salario al mes
    $salarioMensual = ($pagoXhora*$horasXsemana)*4;
    
    echo $salarioMensual, "<br>";

    //se usan fucnioes para calcular los resultados
    function ImpuestoRenta($a)
    {
        return "null";
    }
    function SeguroSocial($a)
    {
        return $a*0.0975;
    }
    function SeguroEducativo($a)
    {
        return $a* 0.0125;
    }

    //guardamos los datos en la sesion para manejarlos en otra pagina
    $_SESSION['name'] = "yo";
    $_SESSION['lastName'] = $lastName;
    $_SESSION['dni'] = $dni;
    $_SESSION['pagoXhora'] = $pagoXhora;
    $_SESSION['horaXsemana'] = $horasXsemana;
    
    $_SESSION['ImpustoRenta'] = ImpuestoRenta($salarioMensual);
    $_SESSION['SeguroSocial']=SeguroSocial($salarioMensual);
    $_SESSION['SeguroEducativo']=SeguroEducativo($salarioMensual);
?>