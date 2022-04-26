<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contacta conmigo</title>
</head>

<body onLoad="FormLoad()">
    
    <form id="myForm" method="post" action="form-data.php">
        <input type="text" name="nombre" id="form_nombre">
        <input type="text" name="apellido" >
        
        <input type="checkbox" name="aceptar" value="pues claro que sí" >
        
        <p>
            <label for="radio_ps4">PS4</label>
            <input id="radio_ps4" type="radio" name="plataforma" value="PS4"> <br>
            <input type="radio" name="plataforma" value="X-BOX"> X-Box<br>
            <input type="radio" name="plataforma" value="WII"> WII<br>
            <input type="radio" name="plataforma" value="No tengo" checked> No tengo<br>
            
            
        </p>
        
        <p>
            <label for="MySelect">Desplegable</label>
            <select name="pais">
                <option value="" selected>Selecciona el país</option>
                <option value="es">España</option>
                <option value="fr">Francia</option>
            
            
            </select>
        
        </p>
        
        
        <input type="hidden" name="id_user" value="13">
        <button type="submit">Enviar</button>
    
    
    
    </form>
    
    
    <script>
        //Función que selecciona un campo al cargar la página
        function FormLoad()
        {
            document.getElementById("form_nombre").focus();
        }
    
    
    
    
    
    </script>
</body>
</html>