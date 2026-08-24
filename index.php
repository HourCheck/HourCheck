<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecciona tu perfil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
        }

       
        .sidebar-left {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 18vw;
            display: flex;
            z-index: 10;
        }

        .stripe-blue {
            background-color: #0052cc;
            width: 50%;
            height: 100%;
        }

        .stripe-orange {
            background-color: #ff5500;
            width: 50%;
            height: 100%;
        }

       
        .main-content {
            margin-left: 18vw;
            min-height: 100vh;
        }

        
        .profile-card {
            background-color: #d9d9d9;
            border-radius: 28px;
            padding: 2rem 1.5rem;
            width: 170px;
            height: 180px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            text-decoration: none;
            color: #000;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
            color: #000;
        }

        .profile-card i {
            font-size: 4rem;
            line-height: 1;
        }

        .profile-card span {
            font-weight: 700;
            font-size: 0.95rem;
        }

      
        .text-blue-link {
            color: #4c84f6;
            text-decoration: none;
            font-weight: 700;
        }

        .text-blue-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

   
    <div class="sidebar-left">
        <div class="stripe-blue"></div>
        <div class="stripe-orange"></div>
    </div>


    <div class="main-content d-flex flex-column justify-content-center align-items-center py-4 px-3">
        
      
        <div class="text-center mb-4">
            <div class="d-inline-flex align-items-center justify-content-center mb-2">
              <img src="logo1.png" alt="Logo" style="width: 200px; height: 200px;">
            </div>
        </div>

      
        <h1 class="fw-bold text-center mb-5 fs-2">Selecciona tu tipo de perfil</h1>

        <div class="d-flex flex-wrap justify-content-center gap-4 mb-5">
            
          
            <a href="loginU.php?perfil=institucion" class="profile-card text-center">
                <i class="bi bi-bank text-primary" style="color: #0052cc !important;"></i>
                <span>Instituciones</span>
            </a>

       
            <a href="loginU.php?perfil=maestro" class="profile-card text-center">
                <i class="bi bi-book-half text-danger" style="color: #6f42c1 !important;"></i>
                <span>Maestros</span>
            </a>

            <a href="loginU.php?perfil=estudiante" class="profile-card text-center">
                <i class="bi bi-mortarboard-fill text-primary" style="color: #0052cc !important;"></i>
                <span>Estudiantes</span>
            </a>

        </div>

        
        <p class="fs-5 text-center fw-bold">
            ¿No sabes cual es tu perfil? <a href="#" class="text-blue-link">Has click aquí</a>
        </p>

    </div>
<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.18.0/firebase-app.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "AIzaSyCfVFTKiKSpNrfOVjIPxy2T-GAMuonYwYo",
    authDomain: "pruebafirebase-e4550.firebaseapp.com",
    projectId: "pruebafirebase-e4550",
    storageBucket: "pruebafirebase-e4550.firebasestorage.app",
    messagingSenderId: "415001098422",
    appId: "1:415001098422:web:f16f3ef27eb3b6e25a0e17"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
</script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
