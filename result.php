<?php
    $pagoXhora=$_POST['pagoXhora'];
    $horasXsemana=$_POST['horasXsemana'];

    $salarioMensual = ($pagoXhora*$horasXsemana)*4;

    function ImpuestoRenta($a)
    {
        $impuesto=0;
        $anual=$a*13;

        if($anual<11000)
        {
            $impuesto="No paga";
        }
        elseif($anual>11000 & $anual<50000)
        {
            $impuesto=(($anual - 11000) * 0.15)/12;
        }
        elseif($anual>50000)
        {
            $impuesto=(($anual - 50000) * 0.25)/12;
        }

        return $impuesto;
    }
    function SeguroSocial($a)
    {
        return $a*0.0975;
    }
    function SeguroEducativo($a)
    {
        return $a* 0.0125;
    }

?>
<?php include("include/header.php")?>
    <div class="container p-2">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Pago por hora</th>
                            <th scope="col">Horas Semanales</th>
                            <th scope="col">Salario Mensual</th>
                            <th scope="col">Impuesto sobre la renta</th>
                            <th scope="col">S.Social</th>
                            <th scope="col">S.Educativo</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr class="table-active">
                            <td><?php echo $_POST['name']?></td>
                            <td><?php echo $_POST['lastName'];?></td>
                            <td><?php echo $_POST['dni']?></td>
                            <td><?php echo $_POST['pagoXhora']?></td>
                            <td><?php echo $_POST['horasXsemana']?></td>
                            <td><?php echo $salarioMensual?></td>
                            <td><?php echo ImpuestoRenta($salarioMensual)?></td>
                            <td><?php echo SeguroSocial($salarioMensual)?></td>
                            <td><?php echo SeguroEducativo($salarioMensual)?></td>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>    
    </div>
<?php include("include/footer.php")?>