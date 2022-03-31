<?php 

$arrayImages = array();

$arrayImages[] = "koala";
$arrayImages[] = "koala2";
$arrayImages[] = "koala3";
$arrayImages[] = "koala4";

$y = 0;

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Práctica CSS</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--Libreria CSS-->
    <link rel="stylesheet" href="css/myStyle.css">
    
    <!--LIBRERIAS BOOTSTRAP-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    
    <div class="container">
        <!--Comienza fila-->
        <div class="row">
            
            <?php for($n=0; $n<15; $n++) : ?>
            
        
            <!-- Comienza item-->
            <div class="item_content col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="item">
                    <div class="img_item">
                        <img src="img/portfolio/<?= $arrayImages[$y] ?>.jpg" alt="Koala">
                    </div>

                    <div class="txt_item">
                        <p><?= $n ?>.- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita ad tenetur sint eos labore corporis libero nobis. Necessitatibus, maiores?</p>
                    </div>

                </div>
            </div>
            <!--Termina item-->
            
            <?php
            
            if($y == 3)
            {
                $y = 0;
            }
             else
             {
                $y++;
             }
            
            
            ?>
            <?php endfor ?>
            
        </div>
        <!--termina fila-->
        <div class="clear"></div>
        
        <!--Comienza fila-->
        <div class="row">
            
            <?php for($n=0; $n<4; $n++) : ?>
            <!-- Comienza item-->
            <div class="item_content col-sm-12 col-md-12 col-lg-6">
                <div class="item">
                    <div class="img_item">
                        <img src="img/pexels-michal-pech-808031.jpg" alt="Koala">
                    </div>

                    <div class="txt_item">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem expedita ad tenetur sint eos labore corporis libero nobis. Necessitatibus, maiores?</p>
                    </div>

                </div>
            </div>
            <!--Termina item-->
            <?php endfor ?>
            
        </div>
    
    
    
    </div>
</body>
</html>
