<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DoRecibir los datos</title>
</head>

<body>
    <h1>Hola <?php echo $_POST['nombre'] . " " . $_POST['apellido'] ?></h1>
    <a href="contact.php">Volver</a>
    <pre>
    
    <?php
    
    print_r($_POST);
    
    
    ?>
    
    </pre>
    
    
    
    
</body>
</html>