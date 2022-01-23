<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 

 <?php 
  $mydir = 'dummy'; 
  
  $myfiles = array_diff(scandir($mydir), array('.', '..')); 
  
  print_r($myfiles); 
?>
 </body>
</html>