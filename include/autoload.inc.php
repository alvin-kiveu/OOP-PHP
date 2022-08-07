<?php
spl_autoload_register('autoLoad');

function autoLoad($className)
{
  $path = "classes/";
  $extension = ".class.php";
  $fullPath = $path . $className . $extension;

  if (!file_exists($fullPath)) {
    echo "File does not exist";
    return false;
  }

  include_once $fullPath;
}