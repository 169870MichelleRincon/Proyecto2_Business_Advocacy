<?php include("db.php") ?>
<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="card card-body">
            <form action="" method="POST">
                <h4>Registro de marca olfativa</h4>
                <br>
                <div class="alert alert-info" role="alert">
                    Para comenzar, selecciona el tipo de persona y presiona "Continuar".
                </div>
                <br>
                <select class="form-select" name="tipo_persona">
                    <!--se rellena con la base de datos-->
                    <?php    
                        $query = "SELECT * FROM tipo_usuario";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){ 
                    ?>
                    <option name="<?php echo $row['descripcion'] ?>"><?php echo $row['descripcion'] ?></option>
                    <?php 
                                } 
                            ?>
                </select>
                <br>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary mb-3 btn-lg" name="tipo">Continuar</button>
                </div>
            </form>
            <?php
               if (isset($_POST['tipo'])){
                    $tipo = $_POST['tipo_persona'];
                   if($tipo=='Moral'){
                        include("registro_persona_moral.php");   
                   } else {
                       include("registro_persona_fisica.php");   
                   }
                }
            ?>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>
