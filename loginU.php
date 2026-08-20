<?php
session_start();
include("conexion.php");

$mensaje = "";

if (isset($_POST['login'])) {
    if (!empty($_POST['correo']) && !empty($_POST['password'])) {
        $email    = trim($_POST['correo']);
        $password = trim($_POST['password']);

        $query_est = "SELECT * FROM estudiantes WHERE email = '$email' AND contraseña = '$password'";
        $res_est   = mysqli_query($conex, $query_est);

       
        $query_doc = "SELECT * FROM docentes WHERE email = '$email' AND contraseña = '$password'";
        $res_doc   = mysqli_query($conex, $query_doc);

 
        $query_inst = "SELECT * FROM institucion WHERE email = '$email' AND contraseña = '$password'";
        $res_inst   = mysqli_query($conex, $query_inst);

        if ($res_est && mysqli_num_rows($res_est) > 0) {
            $usuario = mysqli_fetch_assoc($res_est);
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['rol']        = 'estudiante';
            header("Location: mainPE.php");
            exit();

        } else if ($res_doc && mysqli_num_rows($res_doc) > 0) {
            $usuario = mysqli_fetch_assoc($res_doc);
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['rol']        = 'docente';
            header("Location: mainPD.php");
            exit();

        } else if ($res_inst && mysqli_num_rows($res_inst) > 0) {
            $usuario = mysqli_fetch_assoc($res_inst);
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['rol']        = 'institucion';
            header("Location: mainPI.php");
            exit();

        } else {
            $mensaje = '<div class="alert alert-danger text-center mt-3 p-2 small" role="alert">Correo o contraseña incorrectos</div>';
        }
    } else {
        $mensaje = '<div class="alert alert-warning text-center mt-3 p-2 small" role="alert">Por favor, completa todos los campos</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --bs-primary-orange: #FF6B00;
            --bs-primary-blue: #0047E0;
            --bs-link-blue: #33A1FD;
        }

        body {
            background-color: #F4F4F4;
            min-height: 100vh;
        }

        .sidebar-left {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 17vw;
            display: flex;
            z-index: 1;
        }

        .stripe-orange {
            background-color: var(--bs-primary-orange);
            width: 40%;
            height: 100%;
        }

        .stripe-blue {
            background-color: var(--bs-primary-blue);
            width: 60%;
            height: 100%;
        }

        .brand-logo {
            position: fixed;
            top: 2rem;
            right: 2.5rem;
            z-index: 10;
        }

        .login-card {
            border-radius: 2rem;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.08);
            max-width: 480px;
            width: 100%;
            z-index: 2;
        }

        .btn-back {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 2px solid #212529;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #212529;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background-color: #212529;
            color: #fff;
        }

        .form-control-custom {
            border-radius: 0.8rem;
            padding: 0.75rem 1rem;
            border: 1.5px solid #E5E5EA;
        }

        .form-control-custom::placeholder {
            color: #A0A0A0;
        }

        .form-control-custom:focus {
            border-color: var(--bs-link-blue);
            box-shadow: 0 0 0 0.25rem rgba(51, 161, 253, 0.15);
        }

        .btn-orange {
            background-color: var(--bs-primary-orange);
            color: #fff;
            border-radius: 2rem;
            padding: 0.85rem;
            font-weight: 700;
            font-size: 1.15rem;
            border: none;
            transition: opacity 0.2s ease;
        }

        .btn-orange:hover {
            background-color: #e56000;
            color: #fff;
        }

        .text-link-blue {
            color: var(--bs-link-blue);
            text-decoration: none;
        }

        .text-link-blue:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center position-relative">

    <div class="sidebar-left">
        <div class="stripe-orange"></div>
        <div class="stripe-blue"></div>
    </div>

    <div class="brand-logo text-center">
        <img src="Transparente (1).png" alt="Logo" style="width: 200px; height: 200px;">
    </div>

    <div class="container d-flex justify-content-center align-items-center my-4">
        <div class="card login-card border-0 bg-white p-4 p-sm-5">
            <div class="card-body p-0">
                
                <div class="d-flex align-items-start mb-4">
                    <a href="perfil.php" class="btn-back me-3 flex-shrink-0" aria-label="Volver">
                        <i class="bi bi-arrow-left fs-5"></i>
                    </a>
                    <div>
                        <h1 class="h2 fw-bold text-dark mb-1">Inicio de sesión</h1>
                        <p class="text-muted small mb-0">Ingresa tus datos para continuar</p>
                    </div>
                </div>

                <form method="POST" action="">
                   
                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold text-dark mb-2">Correo Electrónico</label>
                        <input type="email" name="correo" class="form-control form-control-custom" id="email" placeholder="Ingresa tu correo" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold text-dark mb-2">Contraseña</label>
                        <input type="password" name="password" class="form-control form-control-custom" id="password" placeholder="Ingresa tu contraseña" required>
                    </div>

                    <div class="text-center mb-3">
                        <a href="#" class="text-link-blue small fw-semibold">¿Olvidaste tu contraseña?</a>
                    </div>

                  
                   

                    <button type="submit" name="login" class="btn btn-orange w-100 mb-3 mt-2">Iniciar sesión</button>
                </form>

                <div class="text-center">
                    <span class="fw-bold text-dark small">¿No tienes cuenta? </span>
                    <a href="#" id="linkRegistro" class="text-link-blue fw-bold small">Regístrate aquí</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlParams = new URLSearchParams(window.location.search);
        const perfil = urlParams.get('perfil');
        const linkRegistro = document.getElementById('linkRegistro');

        const paginasRegistro = {
            'institucion': 'registro-institucion.php',
            'maestro': 'registro-maestro.php',
            'estudiante': 'registro-estudiante.php'
        };

        linkRegistro.href = paginasRegistro[perfil] || 'registro-estudiante.php';
    });
    </script>
</body>
</html>