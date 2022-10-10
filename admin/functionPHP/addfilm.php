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
	
	$urlvid	=	mysqli_real_escape_string($con, $_POST['url']);
	$submit =	mysqli_real_escape_string($con, $_POST['submit']);
///////
	if ($_POST){
		//ver se todas sao diferent de null
		if($idfilm != NULL && $submit != NULL){
		    $url1 = "https://api.themoviedb.org/3/movie/".$idfilm."?api_key=b5ad6a9f75ea4e476b5f08b524ddf83d&language=pt_br";


		      $curl = curl_init($url1);
	            
	            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	            curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
	            $xml= curl_exec($curl);
	            curl_close($curl);
$xml1 = json_decode($xml);
$genero = $xml1 -> genres[0] -> name;
$genero = mysqli_real_escape_string($con, $genero);
$bg 	= $xml1 -> backdrop_path;
$bg = "https://image.tmdb.org/t/p/w1280".$bg;
$runtime = $xml1 -> runtime;
$runtime = $runtime."Min";		
$idfilm = $xml1->imdb_id;
			$titulo = $xml1 -> title;
			
			$poster = $xml1 -> poster_path;
			
			$poster = 	"https://image.tmdb.org/t/p/w200_and_h300_bestv2/".$poster;
			$rate 	=	$xml1 -> vote_average;
			$cod_imdb 	=	$xml1 -> id;
			$data = $xml1 -> release_date;
			$lancamento = date("Y", strtotime($data));
			$time = $xml1 -> runtime;
			$runtime = $time."Min";
			$origm_c = $xml1 -> production_countries[0] -> iso_3166_1;
			
			$sinopse = $xml1 -> overview;
			$sinopse = substr($sinopse, 0,255);
			
			$sinopse = mysqli_real_escape_string($con, $sinopse);
			$titulo = mysqli_real_escape_string($con, $titulo);
			
			
			
			
			
			
			
			
			/////////////////////////////////////////
			
			
			$check = mysql_query("SELECT * FROM `filmes` WHERE titulo='$titulo'");
			$chec  = mysql_num_rows($check);
			if($chec == "0"){
				
				$sql = mysql_query("INSERT INTO `filmes`( `titulo`, `img`, `link`, `cod`, `tag`, `type`, `ano`, `duracao`, `origem`, `votos`, `trailer`, `sinopse`, `bg`, `diretor`, `restri`, `elenco`, `cod_imdb`) VALUES ('$titulo','$poster','$urlvid','$cod_imdb','$genero','2','$lancamento','$runtime','$origm_c','$rate','0','$sinopse','$bg','0','', '0','$cod_imdb')")or die(mysql_error());


			
				if($sql){
					$_SESSION['FilmAddOK'] 	=	"O filme ".$titulo." Foi adicionado com Sucesso!";
					?><script type="text/javascript">window.history.back(-1);</script><?	
				
				}
			}elseif($chec > "0"){
				$_SESSION['FilmAddFail'] 	=	"O filme ".$titulo." Não pode ser adicionado pois já existe";
				?><script type="text/javascript">window.history.back(-1);</script><?	
					
			}
		}
	}else{
		?><?php
	}
}

?>
<br/>
