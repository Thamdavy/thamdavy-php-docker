<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tham Davy</title>
</head>
<body>
    <h1>CI/CD Pipeline for Containerized Application Deployment to AWS EC2</h1>
    <p>
        <?php
        $servername = 'localhost';
        $username = 'root'; 
        $password = ''; 
        $dbname = 'davy'; 
        
        $connection = new mysqli($servername, $username, $password, $dbname);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        echo "Connected successfully to the database.";
        ?>
    </p>
</body>
</html>