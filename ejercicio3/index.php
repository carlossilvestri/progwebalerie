<?php 

include 'assets/inc/layout/header.php';
// include 'assets/inc/funciones/funciones.php'; valerie
?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-auto mr-auto">
            <form action="calcular.php" method="POST">
                <div class="card text-left" id="contenido">
                    <div class="card-body">
                        <h4 class="card-title">Ingrese los datos de su Empleado</h4>
                        <br>
                        <h6>Empleado 1:</h6>
                        <div class="form-group" id="longitudLado">
                            <label for="first_name1">Nombre: </label>
                            <input type="text" required id="first_name1" type="text" name="first_names1"
                                class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="last_name1">Apellido:</label>
                            <input required id="last_name1" name="last_names1" type="text" class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="cedula1">Cédula:</label>
                            <input required id="cedula1" type="number" name="cedula1" class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="lugar1">Lugar:</label>
                            <input required id="lugar1" type="text" name="lugar1" class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="departamento1">Departamento</label>
                            <select class="form-control" required id="departamento1" name="departamento1">
                                <option value="0" selected>Elige el departamento</option>
                                <option value="adm">Administración</option>
                                <option value="comp">Computación</option>
                                <option value="lit">Literatura</option>
                                <option value="mu">Música</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo1">Sueldo:</label>
                            <input required id="sueldo1" name="sueldo1" type="number" class="validate col-12">
                        </div>
                    </div>
                </div>
                <div class="card text-left" id="contenido">
                    <div class="card-body">
                        <h4 class="card-title">Ingrese los datos de su Empleado</h4>
                        <br>
                        <h6>Empleado 2:</h6>
                        <div class="form-group">
                            <label for="first_name2">Nombre: </label>
                            <input type="text" required id="first_name2" type="text" name="first_names2"
                                class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="last_name2">Apellido:</label>
                            <input required id="last_name2" name="last_names2" type="text" class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="cedula2">Cédula:</label>
                            <input required id="cedula2" type="number" name="cedula2" class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="lugar2">Lugar:</label>
                            <input required id="lugar2" type="text" name="lugar2" class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="departamento2">Departamento</label>
                            <select class="form-control" required id="departamento2" name="departamento2">
                                <option value="0" selected>Elige el departamento</option>
                                <option value="adm">Administración</option>
                                <option value="comp">Computación</option>
                                <option value="lit">Literatura</option>
                                <option value="mu">Música</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo2">Sueldo:</label>
                            <input required id="sueldo2" name="sueldo2" type="number" class="validate col-12">
                        </div>
                    </div>
                </div>
                <div class="card text-left" id="contenido">
                    <div class="card-body">
                        <h4 class="card-title">Ingrese los datos de su Empleado</h4>
                        <br>
                        <h6>Empleado 3:</h6>
                        <div class="form-group" id="longitudLado">
                            <label for="first_name3">Nombre: </label>
                            <input type="text" required id="first_name3" type="text" name="first_names3"
                                class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="last_name3">Apellido:</label>
                            <input required id="last_name3" name="last_names3" type="text" class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="cedula3">Cédula:</label>
                            <input required id="cedula3" type="number" name="cedula3" class="validate col-12">
                        </div>
                        <div class="form-group" id="apotema">
                            <label for="lugar3">Lugar:</label>
                            <input required id="lugar3" type="text" name="lugar3" class="validate col-12">
                        </div>
                        <div class="form-group">
                            <label for="departamento3">Departamento</label>
                            <select class="form-control" required id="departamento3" name="departamento3">
                                <option value="0" selected>Elige el departamento</option>
                                <option value="adm">Administración</option>
                                <option value="comp">Computación</option>
                                <option value="lit">Literatura</option>
                                <option value="mu">Música</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sueldo3">Sueldo:</label>
                            <input required id="sueldo3" name="sueldo3" type="number" class="validate col-12">
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnSiguiente"
                            value="calcular">Siguiente</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>