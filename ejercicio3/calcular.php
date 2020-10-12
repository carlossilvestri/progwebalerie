<?php 

include 'assets/inc/layout/header.php';
include 'assets/inc/funciones/funciones.php'; // Valerie
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-auto mr-auto">
            <?php $index = 0; ?>
            <?php foreach ($arreglo as $array) :  ?>
            <?php $index++; ?>
            <div class="card text-left m-3">
                <div class="card-body">
                    <h4 class="card-title">Datos de su Empleado</h4>
                    <br>
                    <h6>Empleado <?php echo $index; ?></h6>
                    <div class="form-group">
                        <label for="first_name1">Nombres: </label>
                        <input type="text" id="first_name1" disabled value="<?php echo $array["nombres"]; ?>"
                            type="text" class="validate col-12">
                    </div>
                    <div class="form-group">
                        <label for="last_name1">Apellidos:</label>
                        <input type="text" class="validate col-12" disabled value="<?php echo $array["apelldios"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="cedula1">Cédula:</label>
                        <input type="number" class="validate col-12" disabled value="<?php echo $array["cedulas"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lugar1">Lugar:</label>
                        <input type="text" class="validate col-12" disabled value="<?php echo $array["lugar"]; ?>">
                    </div>
                    <div class="form-group">
                        <label for="lugar1">Departamento:</label>
                        <input type="text" class="validate col-12" disabled <?php foreach ($departamentos as $departamento):  
                            if ($array["departamento"] == $departamento["value"] ){ echo "value='".$departamento["escrito"] . "'"; }
                             endforeach; ?>>
                    </div>
                    <div class="form-group">
                        <label for="sueldo1">Sueldo:</label>
                        <input disabled type="number" class="validate col-12" value="<?php echo $array["sueldo"]; ?>">
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>