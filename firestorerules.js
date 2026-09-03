rules_version = '2'; // Tells Firebase to use the latest rules logic
service cloud.firestore {
  match /databases/{database}/documents {
    
    // Regla para la colección de usuarios
    match /users/{userId} {
      allow read, write: if request.auth != null;
    }

    // Permite que CUALQUIERA lea las instituciones (necesario para el formulario)
    match /Institucion/{document} {
      allow read: if true;
      allow write: if request.auth != null;
    }

    // Permite el registro y lectura en la colección de Estudiantes
    match /Estudiantes/{studentId} {
      allow read, write: if request.auth != null;
    }

  }
}