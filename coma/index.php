<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../asm.css" />
    <?php 
      $artistes = require '../artistes.php';
      $artista = basename(__DIR__);
      $nomArtista = $artistes[$artista]['nom'];
      $urlArtista = $artistes[$artista]['url'];
      ?>
    <title><?php echo $nomArtista ?></title>
  </head>
  <body>
    <div class="info-artista">
        <a href="<?php echo $urlArtista?>">
          <img src="../link.png" />
        </a>
    </div>
    <div class="slider-container">
      <?php 

        $fileList = glob('*.jpg');
        foreach($fileList as $filename){
          if(is_file($filename)){
            ?>
            <div class="slide">
              <img
                src="<?php echo $filename ?>"
              />
            </div>
            <?php
          }   
      }
      ?>
    </div>
    <script src="../app.js"></script>
  </body>
</html>
