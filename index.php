<?php include("include/header.php")?>
    
    <!--empieza el formulario usando bootstrap-->
    <div class="container p-4">
        <h1>Formulario</h1>
        <form action="result.php" method="POST">
            <!--Nombre y Apellio-->
            <div class="row form-group">
                <div class="col-md-2">
                    <input type="text" name="name" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-md-2">
                    <input type="text" name="lastName" class="form-control" placeholder="Last name" required>
                </div>
            </div>
            <!--Cedula-->
            <div class="row form-group">
                <div class="col-md-4">
                    <input type="text" name="dni" class="form-control" placeholder="dni" required>
                </div>
            </div>
            <!--Salrio por hora y horas por semana-->
            <div class="row form-group">
                <div class="col-md-2">
                    <input type="number" name="pagoXhora" class="form-control" min="1" step="0.01" placeholder="Pago por hora" required>
                </div>
                <div class="col-md-2">
                    <input type="number" name="horasXsemana" class="form-control" min="8" placeholder="Horas X semana" required>
                </div>
            </div>
            <!--Boton con fuente-->
            <div class="row form-group">
                <div class="col-md-4">
                    <button type="submit" class="btn btn-outline-success btn-block">Calcular    <i class="fas fa-calculator fa-x5"></i></button>
                </div>
            </div>
        </form>
    </div>

<?php include("include/footer.php")?>