<?php
error_reporting(0);
require 'class_IMDb.php';
$imdb = new IMDb(true);
date_default_timezone_set("Brazil/East");
$q = "tt3322312";
$q = trim(stripslashes($_GET['q']));
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>IMDB Api</title>
</head>
<body>
<?php
if(!empty($q)){

	if($_GET['nosummary']=="on") $imdb->summary=false;
	$movie = $imdb->find_by_id($q);
    $movie = json_encode($movie);
    $print = json_decode($movie);
	print '<pre>';
	print_r($print);
	print '</pre>';
}
?>

</body>
</html>