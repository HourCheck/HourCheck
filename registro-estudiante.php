<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --bs-primary-blue: #0047E0;
            --bs-primary-orange: #FF6B00;
        }
        body { background-color: #F4F4F4; min-height: 100vh; }
        .sidebar-left { position: fixed; top: 0; left: 0; height: 100vh; width: 18vw; display: flex; z-index: 1; }
        
        .stripe-blue { background-color: var(--bs-primary-blue); width: 50%; height: 100%; }
        
        .stripe-orange { background-color: var(--bs-primary-orange); width: 50%; height: 100%; }
        
        .brand-logo { position: fixed; top: 2rem; right: 2.5rem; z-index: 10; }
        
        .register-card { border-radius: 2.5rem; box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.08); max-width: 460px; width: 100%; z-index: 2; }
        .btn-back { width: 42px; height: 42px; border-radius: 50%; border: 2px solid #212529; display: inline-flex; align-items: center; justify-content: center; color: #212529; text-decoration: none; transition: all 0.2s ease; }
        
        .btn-back:hover { background-color: #212529; color: #fff; }
        
        .form-control-custom, .form-select-custom { border-radius: 0.8rem; padding: 0.65rem 1rem; border: 1.5px solid #E5E5EA; font-size: 0.95rem; }
        
        .form-control-custom::placeholder, .form-select-custom { color: #A0A0A0; }
        
        .form-control-custom:focus, .form-select-custom:focus { border-color: #33A1FD; box-shadow: 0 0 0 0.25rem rgba(51, 161, 253, 0.15); }
       
        .btn-orange { background-color: var(--bs-primary-orange); color: #fff; border-radius: 2rem; padding: 0.8rem; font-weight: 700; font-size: 1.25rem; border: none; transition: opacity 0.2s ease; }
        
        .btn-orange:hover { background-color: #e56000; color: #fff; }
    </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center position-relative py-5">

    <div class="sidebar-left">
        <div class="stripe-blue"></div>
        <div class="stripe-orange"></div>
    </div>

    <div class="brand-logo text-center">
        <img src="Transparente (1).png" alt="Logo" style="width: 200px; height: 200px;">
    </div>

    <h1 class="fw-bold text-dark display-6 mb-4 text-center" style="z-index: 2;">Registro de Estudiante</h1>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="card register-card border-0 bg-white p-4 p-sm-4">
            <div class="card-body p-2">
                
                <form method="post" autocomplete="off" action="">
                  <input type="hidden" name="tipo_usuario" value="estudiante">
                    <div class="mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <a href="loginU.php" class="btn-back me-3 flex-shrink-0" aria-label="Volver">
                                <i class="bi bi-arrow-left fs-5"></i>
                            </a>
                            <label for="nombre" class="form-label fw-bold text-dark m-0">Nombre Estudiante</label>
                        </div>
                        <input type="text" name="nombre" class="form-control form-control-custom ms-auto" id="nombre" placeholder="ej. Jose Aristides" style="max-width: 80%;" required>
                    </div>

                    <div class="mb-3 ms-auto" style="max-width: 80%;">
                        <label for="institucion" class="form-label fw-bold text-dark mb-1">Institución</label>
                        <select name="institucion" class="form-select form-select-custom" id="institucion" required>
                            <option value="" selected disabled hidden>ej. federación Suiza</option>
                            <option value="Federación Suiza">Federación Suiza</option>
                            <option value="Ofelia Herrera">Ofelia Herrera</option>
                            <option value="Injecar">Injecar</option>
                        </select>
                    </div>

                    <div class="mb-3 ms-auto" style="max-width: 80%;">
                        <label for="correo" class="form-label fw-bold text-dark mb-1">Correo institucional</label>
                        <input type="email" name="correo" class="form-control form-control-custom" id="correo" placeholder="Ej. juan@clases.edu.sv" required>
                    </div>

                    <div class="mb-4 ms-auto" style="max-width: 80%;">
                        <label for="password" class="form-label fw-bold text-dark mb-1">Contraseña</label>
                        <input type="password" name="password" class="form-control form-control-custom" id="password" placeholder="Ingresa tu contraseña" required>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-orange w-100" name="send">Registrarse</button>
                    </div>
                </form>

            

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>