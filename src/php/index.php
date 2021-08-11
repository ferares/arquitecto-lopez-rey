<?php
require_once('./functions.php');

if (isset($_GET['lang'])) {
  $lang = $_GET['lang'];
} else {
  $lang = 'es';
}

if ($lang === 'en') {
  define('TRANSLATIONS', array(
    'main_title' => 'Architect Rodolfo López Rey',
    'biography' => 'Biography',
    'projects' => 'Projects',
    'copyright' => '(c) ' . date('Y') . ' All rights reserved.',
    'tooltip_photo' => 'Click to enlarge',
    'personal_header' => 'Personal Photos',
    'link_biography' => 'Biography and Projects',
    'link_personal' => 'Personal Photos',
    'link_language' => 'Versión español',
    'href_language' => '?lang=es',
    'bio' => '_bio-en.php',
  ));
} else {
  define('TRANSLATIONS', array(
    'main_title' => 'Arquitecto Rodolfo López Rey',
    'biography' => 'Biografía',
    'projects' => 'Obras',
    'personal_header' => 'Fotos personales',
    'copyright' => '(c) ' . date('Y') . ' Todos los derechos reservados.',
    'tooltip_photo' => 'Click para agrandar',
    'link_biography' => 'Biografía y Obras',
    'link_personal' => 'Fotos Personales',
    'link_language' => 'English version',
    'href_language' => '?lang=en',
    'bio' => '_bio-es.php',
  ));
}

// Get the URL
$uri = strtok($_SERVER['REQUEST_URI'], '?');
$pos = strrpos($uri, '/');
$url = $_SERVER['DOCUMENT_ROOT'].substr_replace($uri, '/views', $pos, 0).'.php';
$uri = substr($uri,$pos);
if ($uri === '/') {
  $uri = 'inicio';
  $url = 'views/inicio.php';
} else {
  $uri = substr($uri, 1);
}
?>

<!DOCTYPE html>
<html lang='es'>

  <?php require_once('./inc/_head.php'); ?>

  <body>

    <?php require_once('./inc/_header.php'); ?>

    <?php require_once($url); ?>

    <?php require_once('./inc/_footer.php'); ?>

  </body>

</html>
