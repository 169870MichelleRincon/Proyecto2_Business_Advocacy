            <form action="guardar_registro_moral.php">
                <div class="mb-3">
                    <label class="form-label">Tipo de persona</label>
                    <input type="text" id="TextNombre" class="form-control" value="Persona moral" name="tipo" disable readonly>
                </div>
                <!--Datos del titular-->
                <h2>Datos del titular</h2>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" id="TextNombre" class="form-control" name="nombre_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido paterno</label>
                    <input type="text" id="TextNombre" class="form-control" name="apellidoPat_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido materno</label>
                    <input type="text" id="TextNombre" class="form-control" name="apellidoMat_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">RFC</label>
                    <input type="text" id="TextRFC" class="form-control" name="rfc_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" id="TextTel" class="form-control" placeholder="Ej. 656-123-43-65" name="telefono_t">
                </div>
                <div id="TelHelpBlock" class="form-text">
                    Debe contener 10 números y estar separados por guiones. Ej. 656-123-43-65.
                </div>
                <div class="mb-3">
                    <label class="form-label">Fax</label>
                    <input type="text" class="form-control" id="txtFax" name="fax_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" name="correo_t">
                </div>
                <!--Direccion del titular-->
                <h5>Dirección del titular</h5>
                <div class="mb-3">
                    <label class="form-label">Calle</label>
                    <input type="text" id="DirCalle" class="form-control" name="calle_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Número exterior</label>
                    <input type="text" id="DirNumExt" class="form-control" name="num_ext_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Número interior</label>
                    <!--poner como opcional-->
                    <input type="text" id="DirNumInt" class="form-control" name="num_int_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Colonia</label>
                    <input type="text" id="TextDep" class="form-control" name="colonia_t">
                </div>
                <div class="mb-3">
                    <label class="form-label">Código postal</label>
                    <input type="number" id="numCod" class="form-control" name="cp_t">
                </div>
                <!-- Llenar con la base de datos -->
                <!-- estado -->
                <label class="form-label">Estado</label>
                <select class="form-control" name="estado_t">
                            <?php    
                                $query = "SELECT * FROM estado";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)){ 
                            ?>
                                <option name="<?php echo $row['estado'] ?>"><?php echo $row['estado'] ?></option>
                            <?php 
                                } 
                            ?>
                        </select>
                <!-- municipio -->
                <label class="form-label">Municipio</label>
                <select class="form-control" name="municipio_t">
                            <?php    
                                $query = "SELECT * FROM municipio";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)){ 
                            ?>
                                <option name="<?php echo $row['municipio'] ?>"><?php echo $row['municipio'] ?></option>
                            <?php 
                                } 
                            ?>
                        </select>
                <br>



                <!--Datos del apoderado-->
                <h2>Datos del apoderado</h2>
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" id="TextNombre" class="form-control" name="nombre_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido paterno</label>
                    <input type="text" id="TextNombre" class="form-control" name="apellidoPat_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellido materno</label>
                    <input type="text" id="TextNombre" class="form-control" name="apellidoMat_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">RFC</label>
                    <input type="text" id="TextRFC" class="form-control" name="rfc_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" id="TextTel" class="form-control" placeholder="Ej. 656-123-43-65" name="telefono_a">
                </div>
                <div id="TelHelpBlock" class="form-text">
                    Debe contener 10 números y estar separados por guiones. Ej. 656-123-43-65.
                </div>
                <div class="mb-3">
                    <label class="form-label">Fax</label>
                    <input type="text" class="form-control" id="txtFax" name="fax_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="txtEmail" name="correo_a">
                </div>
                <!--Direccion del apoderado-->
                <h5>Dirección del apoderado</h5>
                <div class="mb-3">
                    <label class="form-label">Calle</label>
                    <input type="text" id="DirCalle" class="form-control" name="calle_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Número exterior</label>
                    <input type="text" id="DirNumExt" class="form-control" name="num_ext_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Número interior</label>
                    <!--poner como opcional-->
                    <input type="text" id="DirNumInt" class="form-control" name="num_int_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Colonia</label>
                    <input type="text" id="TextDep" class="form-control" name="colonia_a">
                </div>
                <div class="mb-3">
                    <label class="form-label">Código postal</label>
                    <input type="number" id="numCod" class="form-control" name="cp_a">
                </div>
                <!-- Llenar con la base de datos -->
                <!-- estado -->
                <label class="form-label">Estado</label>
                <select class="form-control" name="estado_t">
                            <?php    
                                $query = "SELECT * FROM estado";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)){ 
                            ?>
                                <option name="<?php echo $row['estado'] ?>"><?php echo $row['estado'] ?></option>
                            <?php 
                                } 
                            ?>
                        </select>
                <!-- municipio -->
                <label class="form-label">Municipio</label>
                <select class="form-control" name="municipio_t">
                            <?php    
                                $query = "SELECT * FROM municipio";
                                $result = mysqli_query($conn, $query);

                                while($row = mysqli_fetch_array($result)){ 
                            ?>
                                <option name="<?php echo $row['municipio'] ?>"><?php echo $row['municipio'] ?></option>
                            <?php 
                                } 
                            ?>
                        </select>
                <br>



                <br>
                <!--Datos del olor-->
                <h2>Datos del Olor</h2>
                <div class="mb-3">
                    <label class="form-label">Denominación/Nombre</label>
                    <input type="text" id="TextDenominacion" class="form-control" name="nombre_olor">
                </div>

                <h5>Descripción del Olor</h5>
                <div class="alert alert-info" role="alert">
                    En esta sección, deberá ingresar cada uno de los componentes del olor que desea registrar. Si una de las categorias no aplica para tu marca, unicamente selecciona "No aplica".
                </div>
                <!-- Fragante o floral -->
                <label class="form-label">Componente fragante o floral</label>
                    <select class="form-select" name="comp_floral">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 1";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Leñoso o resinoso -->
                <label class="form-label">Componente leñoso o resinoso</label>
                    <select class="form-select" name="comp_res">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 2";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Frutal no citrico -->
                <label class="form-label">Componente frutal no citrico</label>
                    <select class="form-select" name="comp_frutal">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 3";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Mentolado o refrescante -->
                <label class="form-label">Componente mentolado o refrescante</label>
                    <select class="form-select" name="comp_ment">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 4";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Dulce -->
                <label class="form-label">Componente dulce</label>
                    <select class="form-select" name="comp_dulce">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 5";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Quemado o ahumado -->
                <label class="form-label">Componente quemado o ahumado</label>
                    <select class="form-select" name="comp_quem">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 6";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                <!-- Citrico -->
                <label class="form-label">Componente citrico</label>
                    <select class="form-select" name="comp_citrico">
                        <option name="na">No aplica</option>
                        <!--se rellena con la base de datos-->
                        <?php    
                            $query = "SELECT * FROM componente_olor where id_categoria = 7";
                            $result = mysqli_query($conn, $query);
                            while($row = mysqli_fetch_array($result)){ 
                        ?>
                        <option name="<?php echo $row['id_comp'] ?>"><?php echo $row['componente'] ?></option>
                        <?php 
                                    } 
                                ?>
                    </select>
                
                
                <br>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary mb-3 btn-lg" name="enviar_registro">Enviar</button>
                </div>
                <br>
            </form>