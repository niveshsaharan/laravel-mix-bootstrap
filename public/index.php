<?php
if(file_exists(__DIR__ . '/../vendor/autoload.php'))
{
    require_once __DIR__ . '/../vendor/autoload.php';
}
else{
    echo "You need to run `composer install`.";
}

  require_once __DIR__ . '/../mix.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Centire Inc.</title>
    <link rel="stylesheet" type="text/css" href="<?php echo mix('css/app.css'); ?>" />
  </head>

  <body>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aut debitis dignissimos earum eum excepturi id impedit in ipsum, itaque laborum nobis odit omnis placeat possimus quae ratione sequi voluptatum.
    <script src="<?php echo mix('js/app.js'); ?>"></script>
  </body>
</html>
