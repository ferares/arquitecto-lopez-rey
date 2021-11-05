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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NFN5QW7EJ5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-NFN5QW7EJ5');
  </script>
</head>
