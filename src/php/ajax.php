<?php
if (!isset($_POST['action'])) die();

if ($_POST['action'] === 'project-carousel') {
  $project = $projects[$_POST['prefix']];
  $project['prefix'] = $_POST['prefix'];
  ob_start();
  require_once('./inc/_project-carousel.php');
  $carousel = ob_get_clean();
  die(json_encode(array(
    'carousel' => $carousel,
    'title' => "$project[name] ($project[location])",
  )));
} else {
  die();
}
