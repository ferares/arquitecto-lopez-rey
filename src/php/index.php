<?php
require_once('./constants.php');
require_once('./functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once('./ajax.php');
  die();
}

// Get the URL
$uri = strtok($_SERVER['REQUEST_URI'], '?');
$currentUrl = "https://$_SERVER[HTTP_HOST]$uri";
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
<html lang='<?php echo $lang ?>'>

  <?php require_once('./inc/_head.php'); ?>

  <body>

    <a class="visually-hidden-focusable" href="#content">
      <?php echo TRANSLATIONS['skip_to_content'] ?>
    </a>

    <?php require_once('./inc/_header.php'); ?>

    <main id="content">
      <?php require_once($url); ?>
    </main>

    <?php require_once('./inc/_footer.php'); ?>

  </body>

</html>
