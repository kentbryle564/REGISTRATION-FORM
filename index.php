<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = trim($_POST['firstName']);
    $middleName = trim($_POST['middleName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $year = $_POST['year'];
    $section = $_POST['section'];
    $idNumber = trim($_POST['idNumber']);
    $course = $_POST['course'];

    $emailPattern = "/^[^\s@]+@[^\s@]+\.[^\s@]+$/";
    $idPattern = "/^\d{4}-\d{2}-\d{3}$/";
    $namePattern = "/^[A-Za-z\s]+$/";
    $lastNamePattern = "/^[A-Za-z\s-]+$/";


    if (empty($firstName) || empty($middleName) || empty($lastName) || empty($email) || empty($year) || empty($section) || empty($idNumber) || empty($course)) {
        $errorMessage = "Please fill out all fields.";
    } elseif (!preg_match($namePattern, $firstName) || !preg_match($namePattern, $middleName)) {
        $errorMessage = "First and middle names must only contain letters and spaces.";
    } elseif (!preg_match($lastNamePattern, $lastName)) {
        $errorMessage = "Last name must only contain letters, spaces, or hyphens.";
    } elseif (!preg_match($emailPattern, $email)) {
        $errorMessage = "Invalid email format.";
    } elseif (!preg_match($idPattern, $idNumber)) {
        $errorMessage = "Invalid ID format. Use format: 2023-33-323";
    } else {
    
        header("Location: registered.php?firstName=$firstName");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration Form</title>
    <style>
        body { 
          font-family: Arial, sans-serif; 
          background-color: #f0f2f5; 
          padding: 40px; 
        }

        .container {
           background-color: #fff; 
           padding: 25px 30px; 
           border-radius: 8px; 
           max-width: 500px; 
           margin: auto; 
           box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }

        h2 { 
          text-align: center; 
          margin-bottom: 25px; 
        }

        label { 
          font-weight: bold; 
          display: block; 
          margin-top: 15px; 
        }

        input[type="text"], 
        input[type="email"], 
        select { 
          width: 100%; 
          padding: 8px; 
          margin-top: 5px; 
          border: 1px solid #ccc; 
          border-radius: 4px; 
        }

        button { 
          margin-top: 
          20px; width: 100%; 
          padding: 10px; 
          background-color: #4CAF50; 
          color: white; 
          border: none; 
          border-radius: 4px; 
          font-size: 16px; 
          cursor: pointer; 
        }

        button:hover { 
          background-color: #45a049; 
        }

        .error { 
          background-color: #f44336; 
          color: white; 
          padding: 10px; 
          text-align: center; 
          border-radius: 4px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Registration Form</h2>
        <form method="POST">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="middleName">Middle Name</label>
            <input type="text" id="middleName" name="middleName" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="year">Year</label>
            <select id="year" name="year" required>
                <option value="">--Select Year--</option>
                <option value="1">1st Year</option>
                <option value="2">2nd Year</option>
                <option value="3">3rd Year</option>
            </select>

            <label for="section">Section</label>
            <select id="section" name="section" required>
                <option value="">--Select Section--</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>

            <label for="idNumber">ID Number</label>
            <input type="text" id="idNumber" name="idNumber" placeholder="e.g., 2023-33-323" required>

            <label for="course">Course</label>
            <select id="course" name="course" required>
                <option value="">--Select Course--</option>
                <option value="DCET">Diploma in Computer Engineering Technology</option>
                <option value="DMET">Diploma in Mechanical Engineering Technology</option>
                <option value="DEET">Diploma in Electrical Engineering Technology</option>
                <option value="DOET">Diploma in Electronics Engineering Technology</option>
            </select>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
