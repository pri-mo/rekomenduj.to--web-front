<?php
setlocale(LC_ALL, "pl_PL", "Polish_Poland.28592", "pl", "pol", "polish");

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

  if ($isLocal === 'localhost' || $isLocal === 'trepski.local') {?>
    <script src="<?php echo $host ?>livereload.js"></script>
  <?php
  }
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link color="#606060" href="/assets/images/icon.svg" rel="mask-icon">
<link rel="shortcut icon" href="/assets/images/favicon.ico">

<title>Rekomenduj.to</title>

<link rel="stylesheet" href="<?php verFile('/assets/css/main.min.css'); ?>" media="screen" charset="utf-8">

<script src="/assets/js/libs.js" charset="utf-8"></script>
<?php livereload(); ?>
