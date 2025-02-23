<?php
/**
 * Get a path to a file with hashcode
 * @param String $filename name of the file
 * @param String $type type of file [css | js | imgs]
 * @return String path to the file including its hashcode
 */
function assetPath($filename, $type) {
  $path = $filename;
  $manifestPath = './manifest-'.$type.'.json';
  $manifest = json_decode(file_get_contents($manifestPath), TRUE);
  if ($manifest) $path = $manifest[$filename];
  return $path;
}

/**
 * Get a path to a css file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function cssPath($filename) {
  return '/css/'.assetPath($filename, 'css');
}

/**
 * Get a path to a js file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function jsPath($filename) {
  return '/js/'.assetPath($filename, 'js');
}

/**
 * Get a path to an image file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function imgPath($filename) {
  return '/imgs/'.assetPath($filename, 'imgs');
}

/**
 * Echo the path to a css file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function echoCssPath($filename) {
  echo cssPath($filename);
}

/**
 * Echo the path to a js file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function echoJsPath($filename) {
  echo jsPath($filename);
}

/**
 * Echo the path to an image file with hashcode
 * @param String $filename name of the file
 * @return String path to the file including its hashcode
 */
function echoImgPath($filename) {
  echo imgPath($filename);
}
