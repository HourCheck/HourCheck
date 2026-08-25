rules_version = '2'; // Tells Firebase to use the latest rules logic
service cloud.firestore {
  match /databases/{database}/documents {
    
    // This is where you write your specific collection rules!
    match /users/{userId} {
      allow read, write: if request.auth != null;
    }

  }
}
