<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <?php 
      $artistes = require '../artistes.php';
      $nomArtista = $artistes[basename(__DIR__)];
      ?>
    <title><?php echo $nomArtista ?></title>
  </head>
  <body>
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
