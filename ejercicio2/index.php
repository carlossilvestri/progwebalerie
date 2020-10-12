<?php 

include 'assets/inc/layout/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-auto mr-auto">
            <div class="card text-left" id="contenido">
                <div class="card-body">
                    <h4 class="card-title">Área de un Octágono Regular</h4>
                    <form action="calcular.php" method="POST">
                        <h6>Calcular según su:</h6>
                        <div class="form-check">
                            <label class="form-check-label m-3">
                                <input name="checkbox" value="checkLong" type="radio" id="checkLong">
                                Logitud del Lado
                            </label>
                            <label class="form-check-label m-3">
                                <input name="checkbox" value="checkApotema" type="radio" id="checkApotema">
                                Longitud del Apotema
                            </label>
                        </div>
                        <div class="form-group" id="longitudLado">
                            <label for="inputLongitudLado">Longitud del lado (En cm)</label>
                            <input type="number" id="inputLongitudLado" name="longitudLado" class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="inputApotema">Longitud del Apotema (En cm)</label>
                            <input type="number" name="apotema" id="inputApotema" class="validate col-12">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" id="calcular"
                            value="calcular">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>