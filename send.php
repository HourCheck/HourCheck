<?php
include("conexion.php");

$mensaje = "";

if (isset($_POST['send'])) {
    $tipo = isset($_POST['tipo_usuario']) ? trim($_POST['tipo_usuario']) : '';

    if (!isset($conex) || !$conex) {
        die("Error: La conexión a la base de datos no está disponible.");
    }

    // Detectar dinámicamente si la columna es 'password' o 'contraseña'
    $col_pass = "password";
    $check_col = mysqli_query($conex, "SHOW COLUMNS FROM estudiantes LIKE 'password'");
    if ($check_col && mysqli_num_rows($check_col) == 0) {
        $col_pass = "`contraseña`";
    }

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

            $tabla = ($tipo == "estudiante") ? "estudiantes" : "docentes";

            $sql  = "INSERT INTO $tabla (nombre, institucion, email, $col_pass) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($conex, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ssss", $name, $institucion, $email, $password);
                $resultado = mysqli_stmt_execute($stmt);

                if ($resultado) {
                    $mensaje = '<div class="alert alert-success text-center mt-3" role="alert">Registro completado con éxito</div>';
                } else {
                    $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error al registrar: ' . mysqli_stmt_error($stmt) . '</div>';
                }
                mysqli_stmt_close($stmt);
            } else {
                $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error en la consulta: ' . mysqli_error($conex) . '</div>';
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

            $sql  = "INSERT INTO institucion (nombre, codigo, director, email, $col_pass) VALUES (?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($conex, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssss", $nombre_inst, $codigo_inst, $nombre_dir, $email, $password);
                $resultado = mysqli_stmt_execute($stmt);

                if ($resultado) {
                    $mensaje = '<div class="alert alert-success text-center mt-3" role="alert">Registro completado con éxito</div>';
                } else {
                    $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error al registrar: ' . mysqli_stmt_error($stmt) . '</div>';
                }
                mysqli_stmt_close($stmt);
            } else {
                $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error en la consulta: ' . mysqli_error($conex) . '</div>';
            }
        } else {
            $mensaje = '<div class="alert alert-warning text-center mt-3" role="alert">Llena todos los campos de la institución</div>';
        }
    } else {
        $mensaje = '<div class="alert alert-danger text-center mt-3" role="alert">Error: No se especificó el tipo de usuario.</div>';
    }
}
?>