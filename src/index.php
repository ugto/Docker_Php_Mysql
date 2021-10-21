<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php
        $servername = "db";
        $database = "test_db";
        $username = "devuser";
        $password = "devpass";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        if (!$conn) {
            die("No se logro conectar a la base de datos: " . mysqli_connect_error());
        }
        echo "CONEXION A LA BASE DE DATOS SATISFACORIA";
        mysqli_close($conn);
    ?>
    </h1>
</body>
</html>
