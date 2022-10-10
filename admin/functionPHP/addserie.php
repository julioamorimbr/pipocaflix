<?php
session_start();
require("../../conexao/conexao.php");
use Statickidz\GoogleTranslate;
require_once __DIR__ . '/../vendor/autoload.php';
$tr = new GoogleTranslate();

$idMembro = $_SESSION['IdADMIN']   ;
if($idMembro != NULL){	
//Restaura DB
	$idfilm	=	mysqli_real_escape_string($con, $_POST['idfilm']);
	$idfilmt	=	$idfilm;
	
	$submit =	mysqli_real_escape_string($con, $_POST['submit']);
///////
	if ($_POST){
		//ver se todas sao diferent de null
		if($idfilm != NULL && $submit != NULL){
			$key = "b5ad6a9f75ea4e476b5f08b524ddf83d";
			$url = "https://api.themoviedb.org/3/tv/".$idfilmt."?api_key=b5ad6a9f75ea4e476b5f08b524ddf83d&language=pt_br";
		
			  $curl = curl_init($url);
	            
	            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	            $xml= curl_exec($curl);
	            curl_close($curl);

			$xml = json_decode($xml);

			/////////////////////////////////////////
			$titulo = $xml -> name;
			$bg 	= $xml -> backdrop_path;
			$poster = $xml -> poster_path;
			$bg 	=	"https://image.tmdb.org/t/p/w1280/".$bg;
			$poster = 	"https://image.tmdb.org/t/p/w200_and_h300_bestv2/".$poster;
			$rate 	=	$xml -> vote_average;
			$id_f 	=	$xml -> id;
		//////////////////////////////////////
			//////////////////////////////
			////////////////////////
				$sinopse= $xml -> overview;
			
			$post =$xml -> poster_path;
			
			
			$sinopse = substr($sinopse, 0,255);
			
			$sinopse = mysqli_real_escape_string($con, $sinopse);
			$titulo = mysqli_real_escape_string($con, $titulo);
		
			$imdb_cod = $xml -> id;
			
				
//////////////////////////////////////////////////////////
			$sql = mysql_query("SELECT * FROM `series` WHERE title='$titulo'");
			$contagem = mysql_num_rows($sql);
			if($contagem == "0"){
				$grava = mysql_query("INSERT INTO `series`(`title`, `sinopse`, `img`, `tag_camp`, `tag_ep`, `type`, `votos`, `trailer`, `bg`, `cod_imdb`) VALUES 
					('$titulo','$sinopse','$poster','$id_f','$id_f','1','$rate','0','$bg','$imdb_cod')") or die(mysql_error());
				if($grava){

					$_SESSION['FilmAddOK'] = "A Série <strong>".$titulo."</strong> foi adicionada com sucesso!";
							?><script type="text/javascript">window.history.back(-1);</script><?

				}
			}elseif($contagem > "0"){
			$_SESSION['FilmAddFail'] 	=	"A Série <strong>".$titulo."</strong> Não pode ser adicionada pois já existe";
					?><script type="text/javascript">window.history.back(-1);</script><?

			}
		
	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}
}
}

?>
<br/>
