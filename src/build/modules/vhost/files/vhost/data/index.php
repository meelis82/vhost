<?php
require_once './vhost.php';

ksort($vhost);
?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>vhost</title>
    <style>
      body {
        text-align: center;
      }
    </style>
  </head>
  <body>
  <?php foreach ($vhost as $container_name => $links): ?>
    <?php ksort($links); ?>
    <h2><?php print $container_name; ?></h2>
    <?php foreach ($links as $link): ?>
      <p><a href="<?php print $link; ?>" target="_blank"><?php print $link; ?></a></p>
    <?php endforeach; ?>
  <?php endforeach; ?>
  </body>
</html>
