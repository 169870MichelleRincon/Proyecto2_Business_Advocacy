<?php
    //incluir conexion de base de datos
    include("db.php");

if(isset($_POST['enviar_registro'])){
        //almacenar datos en variables
        $tipo = $_POST['tipo'];
        //datos del titular    
        $nombre_t = $_POST['nombre_t']; 
        $apellidoPat_t = $_POST['apellidoPat_t']; 
        $apellidoMat_t = $_POST['apellidoMat_t']; 
        $rfc_t = $_POST['rfc_t']; 
        $telefono_t = $_POST['telefono_t']; 
        $fax_t = $_POST['fax_t']; 
        $correo_t = $_POST['correo_t']; 
        $calle_t = $_POST['calle_t']; 
        $num_ext_t = $_POST['num_ext_t']; 
        $num_int_t = $_POST['num_int_t']; 
        $colonia_t = $_POST['colonia_t'];
        $cp_t = $_POST['cp_t'];
        $estado_t = $_POST['estado_t'];
        $municipio_t = $_POST['municipio_t'];
        
        //datos del apoderado
        $nombre_a = $_POST['nombre_a']; 
        $apellidoPat_a = $_POST['apellidoPat_a']; 
        $apellidoMat_a = $_POST['apellidoMat_a']; 
        $rfc_a = $_POST['rfc_a']; 
        $telefono_a = $_POST['telefono_a']; 
        $fax_a = $_POST['fax_a']; 
        $correo_a = $_POST['correo_a']; 
        $calle_a = $_POST['calle_a']; 
        $num_ext_a = $_POST['num_ext_a']; 
        $num_int_a = $_POST['num_int_a']; 
        $colonia_a = $_POST['colonia_a'];
        $cp_a = $_POST['cp_a'];
        $estado_a = $_POST['estado_a'];
        $municipio_a = $_POST['municipio_a'];
        
        //datos del olor
        $nombre_olor = $_POST['nombre_olor'];
        $comp_floral = $_POST['comp_floral'];
        $comp_res = $_POST['comp_res'];
        $comp_frutal = $_POST['comp_frutal'];
        $comp_ment = $_POST['comp_ment'];
        $comp_dulce = $_POST['comp_dulce'];
        $comp_quem = $_POST['comp_quem'];
        $comp_citrico = $_POST['comp_citrico'];
        
    }


//mostrar id con mas similitud y su cantidad de componentes
    $idSimilar = "SELECT D.id_olor, count(D.id_olor) FROM descripcion_olor 
    D JOIN tabla_temporal T ON T.id_comp = D.id_comp group by id_olor asc Limit 1;";
    $buscandoId = mysqli_query($conn, $idSimilar);
    
    $idSimilar;
    $cantSimilar;

    foreach($buscandoId as $row) {
        $idSimilar = $row['id_olor'];
        $cantSimilar = $row['count(D.id_olor)'];
    }

    $cantComp = 7; //variable estatica de cantidad de componentes que debe tener un olor (tomando en cuenta los nulos)
    
    
    if($cantComp == $cantSimilar){ //si hay similitud guarda los datos
        
        //ALMACENAR DATOS DEL OLOR
        //Nombre o denominacion
        $denominacion = mysqli_query($conn, "INSERT INTO `olor`(`denominacion`) VALUES ('$nombre_olor')");
        //traer id que se registro del olor
        $id_olor_registrado = mysqli_query($conn, "SELECT * FROM olor WHERE id=(SELECT max(id_olor) FROM olor);");
        //almacenar los componentes
        $comp1 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_floral');");
        $comp2 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_res');");
        $comp3 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_frutal');");
        $comp4 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_ment');");
        $comp5 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_dulce');");
        $comp6 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_quem');");
        $comp7 = mysqli_query($conn, "INSERT INTO `descripcion_olor`(`id_olor`, `id_comp`) VALUES ($id_olor_registrado,'$comp_citrico');");
        
        //ALMACENAR DATOS DE TITULAR
        //direccion
        $Direccion_titular = mysqli_query($conn, "INSERT INTO `direccion_detalles`(`calle`, `num_int`, `num_ext`, `pais`, `cp`, `colonia`, `id_municipio`, `id_estado`) VALUES ('$calle_t','$num_int_t','$num_ext_t','Mexico','$cp_t','$colonia_t','$municipio_t','$estado_t');");
        //traer id que se registro del direccion titular
        $id_direccionT_registrada = mysqli_query($conn, "SELECT * FROM direccion_detalles WHERE id=(SELECT max(id_direccion) FROM direccion_detalles);");
        //datos del titular
        $titular = mysqli_query($conn, "INSERT INTO `titular`(`rfc`, `nombre`, `apellido_pat`, `apellido_mat`, `correo`, `id_tipo`, `id_direccion`, `fax`, `telefono`) VALUES ('$rfc_t','$nombre_t','$apellidoPat_t','$apellidoMat_t','$correo_t','$tipo','$id_direccionT_registrada','$fax_t','$telefono_t')");
        
        
        //ALMACENAR DATOS DE APODERADO
        //direccion
        $Direccion_apoderado = mysqli_query($conn, "INSERT INTO `direccion_detalles`(`calle`, `num_int`, `num_ext`, `pais`, `cp`, `colonia`, `id_municipio`, `id_estado`) VALUES ('$calle_a','$num_int_a','$num_ext_a','Mexico','$cp_a','$colonia_a','$municipio_a','$estado_a');");
        //traer id que se registro del direccion titular
        $id_direccionA_registrada = mysqli_query($conn, "SELECT * FROM direccion_detalles WHERE id=(SELECT max(id_direccion) FROM direccion_detalles);");
        //datos del titular
        $apoderado = mysqli_query($conn, "INSERT INTO `titular`(`rfc`, `nombre`, `apellido_pat`, `apellido_mat`, `correo`, `id_tipo`, `id_direccion`, `fax`, `telefono`) VALUES ('$rfc_a','$nombre_a','$apellidoPat_a','$apellidoMat_a','$correo_a','$tipo','$id_direccionA_registrada','$fax_a','$telefono_a')");
        
        //ALMACENAR DATOS DE EXPEDIENTE
        $expediente = mysqli_query($conn, "INSERT INTO `expediente`(`id_Titular`, `id_olor`, `id_Propietario`) VALUES ('$rfc_t','$id_olor_registrado','$rfc_a')";
        
        
        $vaciarTemporal = mysqli_query($conn, "TRUNCATE TABLE tabla_temporal"); //limpia la tabla temporal
        
    } else { //si no hay similitud entonces
        $vaciarTemporal = mysqli_query($conn, "TRUNCATE TABLE tabla_temporal"); //limpia la tabla temporal
        //header("location: index2.php");
    }

        
?>
