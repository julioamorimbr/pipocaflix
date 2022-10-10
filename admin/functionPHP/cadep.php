<?php
session_start();
require("../../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN']   ;
if($idMembro != NULL){		
	$submit = mysqli_real_escape_string($con, $_POST['submit']);

	if($submit){
		if($_POST){
		

			$cod = mysqli_real_escape_string($con, $_POST['cod']);
			$temp = mysqli_real_escape_string($con, $_POST['temp']);
			$url = mysqli_real_escape_string($con, $_POST['url']);
			$ep = mysqli_real_escape_string($con, $_POST['ep']);
            $url_ep = "https://api.themoviedb.org/3/tv/".$cod."/season/".$temp."/episode/".$ep."?api_key=b5ad6a9f75ea4e476b5f08b524ddf83d&language=pt_br";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url_ep);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER , false);
            $exec =  curl_exec($ch);
            curl_close($ch);

            
            $exec = json_decode($exec);

            $titulo_ep = $exec->name;
            if($titulo_ep == NULL){
                $titulo_ep = "Episódio ".$ep;
            }
            $img = $exec->still_path;
            $ep_img = "https://image.tmdb.org/t/p/w500/".$img;
				if($url != NULL && $ep != NULL){

					$sql = mysql_query("SELECT * FROM `series_ep` WHERE tag_ep='$cod' && num_ep='$ep' && temp='$temp'") ;
					$sq = mysql_num_rows($sql);
					if($sq == "0"){
						$titulo = "Episódio ". $ep;
						$mysql = mysql_query("INSERT INTO `series_ep`(`titulo`,`tag_ep`,`link`,`temp`,`num_ep`,`img`) VALUES ('$titulo_ep','$cod','$url','$temp','$ep', '$ep_img')") or die(mysql_error());
						if($mysql){
							$_SESSION['FilmAddOK'] = "Cadastrado Com Sucesso.";
					?><script type="text/javascript">window.history.back(-1)</script><?
						}else{
							$_SESSION['FilmAddFail'] = "Houve Um erro Ao tentar cadastrar.";
							?><script type="text/javascript">window.history.back(-1)</script><?
						}
					}elseif($sq > "0"){
						$_SESSION['FilmAddFail'] = "Já Existe um ep cadastrado.";
					?><script type="text/javascript">window.history.back(-1)</script><?
					}
				}else{
					$_SESSION['FilmAddFail'] = "Campo Vazio.";
					?><script type="text/javascript">window.history.back(-1)</script><?
				}
			}else{
					$_SESSION['FilmAddFail'] = "Nao Foi Possivel Identificar o POST";
					?><script type="text/javascript">window.history.back(-1)</script><?
				}
		}else{		$_SESSION['FilmAddFail'] = "Não foi encontrado Submit";
					?><script type="text/javascript">window.history.back(-1)</script><?
				}
}else{
					?><script type="text/javascript">window.history.back(-1)</script><?
				}
