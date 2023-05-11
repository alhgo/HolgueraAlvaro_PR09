<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
    
    <pre>
    
    <?php
        print_r($_POST);
    ?>
    
    
    </pre>
    
    
    <?php if(isset($_POST['id_user'])) :?>
    
    GRACIASSS
    
    <?php else : ?>
    
    <form action="form.php" method="post">
        Nombre<br>
        <input name="nombre" value="" placeholder="Escribe tu nombre"><br>
        Profesión: 
        <select name="profesion">
            <option value="programador">Programador</option>
            <option value="designer">Diseñador</option>
        
        </select>
        <input type="hidden" name="id_user" value="23">
        <button type="submit">Enviar</button>
        
    
    </form>
    
    <?php endif ?>
</body>
</html>
