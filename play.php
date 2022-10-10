<?
session_start();
require("conexao/conexao.php");
require("secure.php");
$tipo = mysqli_real_escape_string($conn, $_GET['tag']); 
$id_F = mysqli_real_escape_string($conn, $_GET['id']); 
 if($tipo == "filme"){
 	$sql = mysql_query("SELECT * FROM `filmes` WHERE id='$id_F'");
 	$sqltitulo = mysql_fetch_assoc($sql);
 	$sql1 = mysql_query("SELECT * FROM `filmes` WHERE id='$id_F'");
 	$sql_f = mysql_fetch_assoc($sql);
 	$bg  = $sql_f['bg'];
 	$titulo = $sqltitulo['titulo'];
     $link = $sqltitulo['link'];
 }
elseif($tipo == "serie"){
	$sql = mysql_query("SELECT * FROM `series_ep` WHERE id='$id_F'");
	$sql_f = mysql_fetch_assoc($sql);
	$cod = $sql_f['tag_ep'];
	$sql1 = mysql_query("SELECT * FROM `series_ep` WHERE tag_ep='$cod'");
 	
 	$bg = $sql_f['img'];	
 	
 	$bg = str_replace("w227_and_h127_bestv2", "w1280", $bg);
    $link = $sql_f['link'];
 	$serie = mysql_query("SELECT * FROM `series` WHERE  tag_ep='$cod'");
 	$series = mysql_fetch_assoc($serie);
 	$titulo1 = $series['title'];
 	$tituloserie = $sql_w['titulo'];
	$titulo = str_replace("\"","'",$tituloserie);
	
}

$idPerfil = $_SESSION['idPerfil'];
?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title><?=$titulo?></title>
<style type="text/css">
	.back{
		display: block !important;
		transition: 1s all;
		background:rgba(0,0,0,0.5);
		border:1px solid black;
	}

</style>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Core Funcs -->
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://content.jwplatform.com/libraries/B0jgHhOE.js" ></script>
<script>jwplayer.key="/EfUeVKETfq+V/kyoFp4EaeTEGDJQI9rC6318Q==";</script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- END Core Funcs -->
	<style>
		* {
		    margin: 0px;
		}
		html {
		    overflow: hidden;
		}
		.volta{
			position: absolute;
			background: url("https://www.mahealthdata.org/Resources/Pictures/btn-back.png") no-repeat;
			background-position: center;
			background-size: 35px 35px;
			width: 35px;
			height: 35px;
			z-index: 1000;
			padding: 5px;
		}
	</style>
	<!-- Icons -->
    
    <!-- END Icons -->	
</head>
<body>
	
	<div class="volta" onclick="window.history.back(-1);">


	</div>
	<div id="encrpyt">
		
	</div>
	<!-- Core Streaming -->
    
<iframe src="<?=$link?>" frameborder="0" width="100%" height="100%" scrolling="no" style="height:100%;width:100%" allowfullscreen></iframe>
</body>
</html>
<input type="hidden" id="tmpsave" >

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>