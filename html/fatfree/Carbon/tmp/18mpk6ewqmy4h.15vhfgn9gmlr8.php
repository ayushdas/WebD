<!DOCTYPE html>
<html>
   <head>
      <title><?= $html_title ?></title>
      <meta charset='utf8' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   </head>
   <body>
      <?php echo $this->render($content,NULL,get_defined_vars(),0); ?>
   </body>
</html>
