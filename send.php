<?php
include("conexion.php");

$mensaje = "";

if (isset($_POST['send'])) {
    // Verificar si se especificó un tipo de usuario
    $tipo = isset($_POST['tipo_usuario']) ? $_POST['tipo_usuario'] : '';

    // CASO 1: Estudiante o Docente
    if ($tipo == "estudiante" || $tipo == "docente") {
        if (
            !empty($_POST['nombre']) &&
            !empty($_POST['institucion']) &&
            !empty($_POST['correo']) &&
            !empty($_POST['password'])
        ) {
            $name        = trim($_POST['nombre']);
            $institucion = trim($_POST['institucion']);
            $email       = trim($_POST['correo']);
            $password    = trim($_POST['password']);

            if ($tipo == "estudiante") {
                $consulta = "INSERT INTO estudiantes (nombre, institucion, email, contraseña) 
                             VALUES ('$name', '$institucion', '$email', '$password')";
            } else {
                $consulta = "INSERT INTO docentes (nombre, institucion, email, contraseña) 
                             VALUES ('$name', '$institucion', '$email', '$password')";
            }

            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                $mensaje = '<div class="alert alert-success text-center mt-3" role="alert">Registro completado con éxito</div>';
            } else {
                $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error en MySQL: ' . mysqli_error($conex) . '</div>';
            }
        } else {
            $mensaje = '<div class="alert alert-warning text-center mt-3" role="alert">Llena todos los campos del formulario</div>';
        }

    // CASO 2: Institución
    } else if ($tipo == "institucion") {
        if (
            !empty($_POST['nombre_institucion']) &&
            !empty($_POST['codigo_institucion']) &&
            !empty($_POST['nombre_director']) &&
            !empty($_POST['correo']) &&
            !empty($_POST['password'])
        ) {
            $nombre_inst = trim($_POST['nombre_institucion']);
            $codigo_inst = trim($_POST['codigo_institucion']);
            $nombre_dir  = trim($_POST['nombre_director']);
            $email       = trim($_POST['correo']);
            $password    = trim($_POST['password']);

            $consulta = "INSERT INTO institucion (nombre, codigo, director, email, contraseña) 
                         VALUES ('$nombre_inst', '$codigo_inst', '$nombre_dir', '$email', '$password')";

            $resultado = mysqli_query($conex, $consulta);

            if ($resultado) {
                $mensaje = '<div class="alert alert-success text-center mt-3" role="alert">Registro completado con éxito</div>';
            } else {
                $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error en MySQL: ' . mysqli_error($conex) . '</div>';
            }
        } else {
            $mensaje = '<div class="alert alert-warning text-center mt-3" role="alert">Llena todos los campos de la institución</div>';
        }
    } else {
        $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error: No se especificó el tipo de usuario.</div>';
    }
}
?>