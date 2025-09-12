<?php
$firstName = isset($_GET['firstName']) ? htmlspecialchars($_GET['firstName']) : 'Student';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f2f5; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        }
        
        .container { 
            text-align: center; 
            background-color: #fff; 
            padding: 40px; 
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0,0,0,0.1); 
        }

        h2 { 
            color: #4CAF50; 
        }

        p { 
            color: #333; 
            font-size: 18px;
         }

        a { 
            display: inline-block;
            margin-top: 20px; 
            padding: 10px 20px; 
            background-color: #4CAF50; 
            color: white; 
            text-decoration: none; 
            border-radius: 4px; 
        }

        a:hover { 
            background-color: #45a049; 
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Successful!</h2>
        <p>Thank you, <?php echo $firstName; ?>! Your registration has been completed successfully.</p>
        <a href="index.php">Go Back to Registration</a>
    </div>
</body>
</html>
