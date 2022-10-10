<?php
session_start();
require("../conexao/conexao.php");
$tipo = mysqli_real_escape_string($conn, $_GET['t']);
$idf = mysqli_real_escape_string($conn, $_GET['id']);
$loginM = $_SESSION['Login'];


if($_GET){
	if($tipo != NULL && $idf != NULL && $loginM != NULL){
		if($tipo == "1"){
			$sql = mysql_query("SELECT * FROM `series` WHERE tag_ep='$idf'");
			$cap = mysql_fetch_assoc($sql);
			$titulo = mysqli_real_escape_string($conn, $cap['title']);
			$sinopse= mysqli_real_escape_string($conn, $cap['sinopse']);
			$img = mysqli_real_escape_string($conn,$cap['img']);	
		}
		elseif($tipo == "2"){
			$sql = mysql_query("SELECT * FROM `filmes` WHERE id='$idf'");
			$cap = mysql_fetch_assoc($sql);
			$titulo = mysqli_real_escape_string($conn,$cap['titulo']);
			$sinopse= mysqli_real_escape_string($conn,$cap['sinopse']);
			$img = mysqli_real_escape_string($conn,$cap['img']);
		
		}
	$num = mysql_num_rows($sql);
	if($num > 0){
		$sql_M = mysql_query("SELECT * FROM `mylist` WHERE id_f='$idf'");
		$numM = mysql_num_rows($sql_M);
		if($numM == 0){
			$insert = mysql_query("INSERT INTO `mylist`( `login`, `type`, `sinopse`, `title`, `img`, `id_f`) VALUES ('$loginM','$tipo', '$sinopse', '$titulo', '$img', '$idf')");
			if($insert){
			$_SESSION['OkFilm'] = "Adicionado Com Sucesso!";
			?><script type="text/javascript">window.history.back(-1);</script><?	
			}
		}else{
			$_SESSION['ExistFilm'] = "Pedimos desculpas mas o titulo já se encontra na sua lista";
			?><script type="text/javascript">window.history.back(-1);</script><?
		}


	}else{
		?><script type="text/javascript">window.history.back(-1);</script><?
	}

	}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}
}else{
	?><script type="text/javascript">window.history.back(-1);</script><?
}


?>