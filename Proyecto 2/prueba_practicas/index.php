<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="card card-body">
            <form action="seleccionar_persona.php">
                <div class="form-group">
                    <h2>Registro de marcas olfativas</h2>
                    <br>
                    <div class="alert alert-info" role="alert">
                        Para registrar tu marca olfativa llena los siguientes datos. <br> Nota: Si los datos muestran alguna similitud otros registros la solicitud no será procesada y deberá realizarse nuevamente.
                    </div>
                </div>
                <br>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary mb-3 btn-lg">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
