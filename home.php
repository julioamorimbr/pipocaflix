<?php
require("functionPHP/protege.php");
require("pages/pics.php");
require("conexao/conexao.php");
require("functionPHP/function.php");

 ?>
<style type="text/css">
	.dropdown-divider{
		width: 100%;
		border-bottom:1px solid rgba(100,100,100,0.7);
	}
	@media all and (min-width: 751px){
		.right{
			margin-right: 2.5%;
		}
	}
	.dropdown-header{
		text-align: center;
	}
	ul.dropdown-menu li:hover{
		background-color: transparent !important;
		background:transparent !important;
	}
	.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
		background-color:transparent !important;
    background-image: -webkit-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%)  !important;
    background-image: -o-linear-gradient(top,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%)  !important;
    background-image: -webkit-gradient(linear,left top,left bottom,from(rgba(0,0,0,0)),to(rgba(0,0,0,0))) !important;
    background-image: linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,0) 100%)  !important;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff5f5f5', endColorstr='#ffe8e8e8', GradientType=0);
    background-repeat: repeat-x;

	}
	.navgador-drop a{
		float: left;
		margin-bottom: 5px;
		padding: 2px 20px;
		border:1px solid rgba(0,0,0,1);
		border-radius: 50px;
		background: linear-gradient(to top , rgba(100,100,100,0.7) , rgba(150,150,150,0.7));	
		background: -o-linear-gradient(to top , rgba(100,100,100,0.7) , rgba(150,150,150,0.7));	
		background: -ms-linear-gradient(to top , rgba(100,100,100,0.7) , rgba(150,150,150,0.7));	
		background: -webkit-linear-gradient(to top , rgba(100,100,100,0.7) , rgba(150,150,150,0.7));	
		color:rgba(200,200,200,1);
		text-decoration: none;
	}
	.navgador-drop a:hover,.navgador-drop a:focus{
		text-decoration: none;
		color: white;
		background: linear-gradient(to top , rgba(150,150,150,0.7) , rgba(200,200,200,0.7));	
		background: -o-linear-gradient(to top , rgba(150,150,150,0.7) , rgba(200,200,200,0.7));	
		background: -ms-linear-gradient(to top , rgba(150,150,150,0.7) , rgba(200,200,200,0.7));	
		background: -webkit-linear-gradient(to top , rgba(150,150,150,0.7) , rgba(200,200,200,0.7));	
	}
	@media screen and (max-width: 750px){
		.owl-nav{
			display: none;
		}
	}
</style>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>PipocaFlix</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/owl.carousel.min.js"></script>
<script type="text/javascript">
     jQuery(document).ready(function() {
	 var highestCol = Math.max(jQuery('#shadow').height(),jQuery('#bg-img').height()); // Pega altura da Div main
	 jQuery('#shadow').height(highestCol); //Aplica altura da div main à div sidebar
	 var conteudo = Math.max(jQuery('.shadow-linear').height(),jQuery('#shadow').height()); // Pega altura da Div main
	 $(".conteudo").css("top", conteudo);


     });



</script>
<script>
$(function(){   
var nav = $('.header');   
$(window).scroll(function () { 
if ($(this).scrollTop() > 0) { 
nav.addClass("menu-bg"); 
} else { 
nav.removeClass("menu-bg"); 
} 
});  
});
</script>

  </head>
  
  
  <body>

    <div class="header">
    	<div class="content">







<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <div class="img"><a href="?"><img src="img/logo.png"></a></div>
       <div class="right">
				  	<div class="search">
				  		<form id="search" method="GET" >
						<input type="search" id='inputSearch' name="q" onkeypress="javascript:handSearch(this);">
						</form>	
				  	</div>
				  	 <div class="btn-group" role="group">
					    <button type="button" class="btn-navegador bg-black" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					      <div class="icon-svg"><svg class="red" width="32px" height="32px" ><use xlink:href="#smiley"></use></svg></div> <span class="profile-name "><?=$_SESSION['NomeLog']?></span>
					      <span class="caret profile-name" style="color: white;"></span>
					    </button>
					    <ul class="dropdown-menu" style="height: auto;">
					      <li class="dropdown-header"><?php echo substr($_SESSION['NomeLog']." ". $_SESSION['Snome'], 0,15) ?></li>
					      	
					      <div class="dropdown-divider"></div>
					      <li style="text-align: center;"><a href="?action=mylist">Minha Lista</a></li>
					       <li style="text-align: center;"><a href="browser.php">Gerenciar Perfils</a></li>
					       <li style="text-align: center;"><a href="sair.php">Sair</a></li>
					        
					    </ul>
					  </div>
					</div>
    </div>

<script type="text/javascript">
	function handSearch(elm){
		var search = $('#inputSearch').val();
		$.post("pages/busca.php", { titulo: search }, function (data){

		})

	}
</script>   

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse" id="bs-example-navbar-collapse-1">
      
        <div class="navgation">
    			
    			<!--Navegador --><!--Navegador --><!--Navegador --><!--Navegador --><!--Navegador -->
    			<div class="navgador" role="group">
				    <button type="button" class="btn-navegador" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				      Navegar
				      <span class="caret"></span>
				    </button>
				    <ul class="dropdown-menu navgador-drop" style=" height:auto; background:rgba(0,0,0,0.8) !important; border-left: 1px solid rgba(255,255,255,0.15);border-bottom: 1px solid rgba(255,255,255,0.15); border-right: 1px solid rgba(255,255,255,0.15); border-top: 2px solid rgba(255,255,255,0.3); color: white; word-wrap: break-word;">
				   		<div class="container">
				   			<a href="?action=series">Séries</a>
				   			<a href="?action=animacao">Animação</a>
				   			<a href="?action=aventura">Aventura</a>
				   			<a href="?action=acao">Ação</a>
				   			<a href="?action=cinematv">Cinema TV</a>
				   			<a href="?action=comedia">Comédia</a>
				   			<a href="?action=crime">Crime</a>
				   			<a href="?action=documentario">Documentário</a>
				   			<a href="?action=drama">Drama</a>
				   			<a href="?action=familia">Família</a>
				   			<a href="?action=fantasia">Fantasia</a>
				   			<a href="?action=faroeste">Faroeste</a>
				   			<a href="?action=fcientifica">Ficção Científica</a>				   			
				   			<a href="?action=guerra">Guerra</a>
				   			<a href="?action=historia">História</a>
				   			<a href="?action=misterio">Mistério</a>
				   			<a href="?action=musica">Música</a>
				   			<a href="?action=romance">Rômance</a>
				   			<a href="?action=terror">Terror</a>
				   			<a href="?action=thriller">Thriller</a>
				   		</div>		

				   		
				    </ul>
				  
				  </div>
				  <!--Navegador --><!--Navegador --><!--Navegador --><!--Navegador -->
				  
				  </div>	
      
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>











    		
    		</div>
    	</div>
    	<?php
    	$search = mysqli_real_escape_string($con, $_GET['q']);
    	$action = mysqli_real_escape_string($conn, $_GET['action']);
    	 if($action == "home" && $search == NULL or $action == NULL && $search == NULL){
    	 	include_once("require/header.php");
    	 }elseif($action == "film"){
    	 	include_once("pages/view.php");
    	 }
    	 elseif($action == "serie"){
    	 	include_once("pages/view.php");
    	 }
elseif($action == "kids"){
    	 	include_once("pages/kids-container.php");
    	 }


    	 ?>
    	


<?php


	if($action == NULL && $search == NULL or $action == "home" && $search == NULL){
		include_once("pages/home-container.php");
	}
	if ($search != NULL) {
		include_once("pages/busca.php");
	}

	elseif($action == "animacao"){
		include_once("pages/animacao-container.php");
	}
	elseif($action == "series"){
		include_once("pages/series-container.php");
	}
	elseif($action == "aventura"){
		include_once("pages/aventura-container.php");
	}
	elseif($action == "acao"){
		include_once("pages/acao-container.php");
	}
	elseif($action == "cinematv"){
		include_once("pages/cinematv-container.php");
	}
	elseif($action == "comedia"){
		include_once("pages/comedia-container.php");
	}
	elseif($action == "crime"){
		include_once("pages/crime-container.php");
	}
	elseif($action == "documentario"){
		include_once("pages/documentario-container.php");
	}
	elseif($action == "drama"){
		include_once("pages/drama-container.php");
	}
	elseif($action == "familia"){
		include_once("pages/familia-container.php");
	}
	elseif($action == "fantasia"){
		include_once("pages/fantasia-container.php");
	}
	elseif($action == "faroeste"){
		include_once("pages/faroeste-container.php");
	}
	elseif($action == "fcientifica"){
		include_once("pages/fcientifica-container.php");
	}
	elseif($action == "guerra"){
		include_once("pages/guerra-container.php");
	}
	elseif($action == "historia"){
		include_once("pages/historia-container.php");
	}
	elseif($action == "misterio"){
		include_once("pages/misterio-container.php");
	}
	elseif($action == "musica"){
		include_once("pages/musica-container.php");
	}
	elseif($action == "romance"){
		include_once("pages/romance-container.php");
	}
	elseif($action == "terror"){
		include_once("pages/terror-container.php");
	}
	elseif($action == "thriller"){
		include_once("pages/thriller-container.php");
	}
		elseif($action == "mylist"){
		include_once("pages/mylist.php");
	}
?>
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->

		</div>
			<script type="text/javascript">
				$('.owl-carousel').owlCarousel({
    loop:false,
    margin:5,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        300:{
            items:3
        },
        650:{
            items:7
        }
    }
})
			</script>
		
    	</div>

  </body>

 
</html>
