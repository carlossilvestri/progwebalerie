<?php 

include 'assets/inc/layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-auto mr-auto">
            <div class="card text-left" id="contenido">
                <div class="card-body">
                    <h4 class="card-title">Hipotenusa de un triángulo rectangulo</h4>
                    <form action="calcular.php" method="POST">
                        <div class="form-group">
                            <label for="lado1">Lado 1 en cm</label>
                            <input required type="number" class="form-control" id="lado1" name="lado1">
                        </div>
                        <div class="form-group">
                            <label for="lado2">Lado 2 en cm</label>
                            <input required type="number" class="form-control" id="lado2" name="lado2">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" value="calcular">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>