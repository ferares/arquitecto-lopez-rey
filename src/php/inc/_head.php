<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo TRANSLATIONS['desc'] ?>">
  <title>
    <?php echo TRANSLATIONS['main_title'].(isset($title) ? ' | '.$title : '') ?>
  </title>
  <link rel=canonical hreflang="es" href="<?php echo $currentUrl ?>?lang=es">
  <link rel=”alternate” hreflang="en" href="<?php echo $currentUrl ?>?lang=en">
  <link rel="stylesheet" href="<?php echoCssPath('main.css') ?>">
  <script src="<?php echoJsPath('jquery.min.js') ?>"></script>
  <script src="<?php echoJsPath('bootstrap.min.js') ?>"></script>
  <script src="<?php echoJsPath('main.js') ?>"></script>
</head>
