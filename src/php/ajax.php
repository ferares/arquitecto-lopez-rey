<?php
if (!isset($_POST['action'])) die();

if ($_POST['action'] === 'project-carousel') {
  $project = $projects[$_POST['prefix']];
  $project['prefix'] = $_POST['prefix'];
  require_once('./inc/_project-carousel.php');
  die();
} else {
  die();
}
