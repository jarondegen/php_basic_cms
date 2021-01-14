<?php

require_once('../../../private/initialize.php');

//grabbing from url test parameter
$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('/staff/subjects/index.php'));
} elseif($test == 'redirect'){
  redirect_to(url_for('/staff/subjects/index.php'));
} else {
  echo 'No error';
}
?>
