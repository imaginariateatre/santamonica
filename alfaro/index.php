<?php 
  $mydir = 'dummy'; 
  
  $myfiles = array_diff(scandir($mydir), array('.', '..')); 
  
  print_r($myfiles); 
?> 