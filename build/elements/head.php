<?php
function verFile($filename){
  date_default_timezone_set('UTC');

  if (substr( $filename, 0, 7 ) !== 'http://') {
    $fullFileUrl = "http://$_SERVER[HTTP_HOST]$filename";
  } else {
    $fullFileUrl = $filename;
  }

  $output = $fullFileUrl . '?now='.date("His");
  echo $output;
}

function livereload() {
  $isLocal = $_SERVER['SERVER_NAME'];
  $host = '//'.$_SERVER['SERVER_NAME'].':35729/';

  if ($isLocal === 'localhost' || $isLocal === 'deepthought.local') {
    echo '<script src="'.$host.'livereload.js"></script>';
  }
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<title>Rekomenduj.to</title>

<link rel="stylesheet" href="<?php verFile('/assets/css/main.min.css'); ?>" media="screen" charset="utf-8">

<script src="/assets/js/libs.min.js" charset="utf-8"></script>
<?php livereload(); ?>
