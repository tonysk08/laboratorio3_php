<?php include("include/header.php")?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">Nombre</th>
                            <th scope="col">Cedula</th>
                            <th scope="col">Pago por hora</th>
                            <th scope="col">Horas Semanales</th>
                            <th scope="col">Salario Mensual</th>
                            <th scope="col">Impuesto sobre la renta</th>
                            <th scope="col">Seguro Social</th>
                            <th scope="col">Seguro Educativo</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <tr class="table-active">
                            <?php if(isset($_SESSION['name'])){?>
                                <?php echo "pues no se";?>
                            <?php 
                            }
                            else
                            {
                                echo "nell papa";
                            } 
                            ?>
                        </tr>
                    </tbody>
                </table> 
            </div>
        </div>    
    </div>
<?php include("include/footer.php")?>