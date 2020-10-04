<!DOCTYPE html>
<?php 
require_once('./php/component.php');
?>
<html>
<body>
  <head>
    <link rel="stylesheet" href="week3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <title>
    Shopping cart simple
  </title>
  <div class="items">
  <?php 
  component("turtle1","500");
  component("turtle2","600");
  component("turtle3","700");
  component("turtle4","800");
  component("turtle5","900");
  ?>
  
</div>
</body>
</html>