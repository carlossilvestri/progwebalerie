<?php 

include 'assets/inc/layout/header.php';
include 'assets/inc/funciones/funciones.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-auto mr-auto">
            <div class="card text-left" id="contenido">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $segunSu; ?> </h4>
                    <div class="form-group">
                        <input disabled type="text" class="form-control" id="lado1" name="lado1"
                            value=" <?php echo $areaDelRectanguloRegular; ?> cm²">
                    </div>
                    <button type="button" id="btnRegresar" class="btn btn-primary">Regresar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>