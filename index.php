<?php
session_start();
$idM    =   $_SESSION['IdMembro'];
if($idM != NULL){
  header("LOCATION: browser.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Pipocaflix - Filmes Online</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#menu a").click(function( e ){
      e.preventDefault();
      var href = $( this ).attr('href');
      $("#content").load( href +" #content");
    });
  });

 $(function(){ // equivalente a $(document).ready(function(){
  $('.bolinhas li a').click(function(event) {
    event.preventDefault();
    $('.bolinhas li a').removeClass('target');
    $(this).parent().addClass('target');
  });
});
 function removeclassf(){
  document.getElementById("first").classList.remove('target');
 }
  function removeclasss(){
  document.getElementById("secundary").classList.remove('target');
 }
  </script>

  </head>
  <body>
  	<style type="text/css">
    @media screen and (max-width: 700px){
      .conteudo-anunc{
      margin-bottom: 20px !important;
    }
    }
    @media screen and (min-width: 701px){
      .conteudo-anunc{
      margin-bottom: 100px;
    }
    }
    .suporte{
      background: black;
    }
    .box-left{
      width: 50%;
      flex: 1;
      float: left;
    }
    .img-canc, {
      float: right;
      width: 50%;
    }
    .img-canc img{
      width: 50%;
    }

    .box-item, .img-anun img{
      float: left;
      width:250px;
      margin-left: 5%;
      flex: 1;
    }

    .title-anun{
      font-weight: bold;
      text-align: center;
      color: white;
    }
    .info-anun{
      text-align: center;
      font-size: 14px;
      color:rgba(150,150,150,1);
    }
    li.first{
      width: 49%;
      float: left;
    }
    li.secundary{
      width: 49%;
      
      float: left;
    }
    .tin-small-header-wrapper{
      margin-top:40px;
    }
      .tin-small-cta{
    
    color: white !important;
    font-size: 25px;
    width: 65%;
    float: left;
  }
  @media screen and (max-width: 700px){
     .box-left{
      width: 100%;
      flex: 1;
      float: left;
    }
    .img-canc, {
      float: right;
      width: 100%;
    }
    .btn-canc{
      position: relative !important;
      width: 100%;
      flex: 1;
      float: left;
      margin-left: 0 !important;
      left: 0 !important;

    }
    .img-canc img{
      width: 100%;
    }
       .box-item, .img-anun img{
      float: left;
      width:100%;
       margin-left: 0px !important;
    }
      .tin-small-header-wrapper{
      margin-top:40px;
    }
      .tin-small-cta{
    
    color: white !important;
    font-size: 19px;
    width: 100%;
    float: left;
  }
  .btn-anun{
    width: 100%;
  }
  }

  	li:first img{
      width: 15%;

    }
  	div.content{
  		position: absolute;
  	}
    li a{
      color: white;
    }
    li a:hover{
      color: rgba(214,214,214,1);
    }
    a:focus{
      text-decoration: none;
    }
    a:hover{
      text-decoration: none;
    }
    a:active{
      text-decoration: none;
    }
  		body, html {
  			    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
			    color: #333;
			    font-size: 16px;
			    direction: ltr;
			    -webkit-font-smoothing: antialiased;
			    -moz-osx-font-smoothing: grayscale;
			  	font-family: sans-serif;
			    -ms-text-size-adjust: 100%;
			    -webkit-text-size-adjust: 100%;
  		}
  		.content{
  			width: 100%;
  			height: auto;
  		}
  		.shadow-bg {
  			position: relative;
  			z-index: 1;
  		
  			width: 100%;
  			height: 100%;	
  		}
  		.header{
  		width: 100%;
  		position: absolute;
  		z-index: 5;
  		top:0;
  		background: 0 0;
   	    border: 0;
   
  	}
  	
  	.logo{
  		    margin-left: 3%;
  		    float: left;
  		    margin-top: 20px;
  	}

  	a{
  		text-decoration: none;
  	}
  	.btn-login:hover{
    background: #f40612;
    text-decoration: none;
}
  	.btn-login{
  	float: right;
  	color: #fff;
    background-color: #e50914;
    line-height: normal;
    margin: 18px 3% 0;
    padding: 7px 17px;
    font-weight: 400;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 14px;
  	}
  	.shadow-linear{
  		float: left;
  		width: 100%;
  		height: 100%;
  		position: absolute;
  		z-index: 3;
  		background:linear-gradient(left, left, rgba(0,0,0,0.6) , rgba(0,0,0,0));
  		background:-o-linear-gradient(left,left, rgba(0,0,0,0.6) , rgba(0,0,0,0));
  		background:-webkit-linear-gradient(left, rgba(0,0,0,0.6) , rgba(0,0,0,0));
  	}
  	.info{
  		color:white;
  		width: 100%;
  		position: absolute;
  		height: 100px;
  		top:-50px;
  		position: absolute;
    -webkit-transform: translate(0,-50%);
    -moz-transform: translate(0,-50%);
    -ms-transform: translate(0,-50%);
    -o-transform: translate(0,-50%);
    transform: translate(0,-50%);
    font-size: 1.8vw;
    z-index: 13;
    left: 0;
    margin: 0 3%;
    width: 94%;
    top: 29vh;
    max-width: 60%;

  	}
  	.info h1{
  		font-weight: bold;
  		text-shadow: 0px 0px 3px black;	
    position: relative;
    top: 0;
    min-font-size: 12pt;
    font-size: 3em;
	}
	.btn-registrar:hover{
		 background: #f40612;
    text-decoration: none;
	}
	.btn-registrar{
		margin-top:10px;
		padding:3px 25px;
		font-size: 14px;
		    letter-spacing: 1.9px;
		    font-weight: 400;
		        padding: 12px 2em;
    min-width: 112px;
    min-height: 44px;
		   color: #fff;
    background-color: #e50914;
    background-image: -webkit-gradient(linear,left top,left bottom,from(#e50914),to(#db0510)); */
    background-image: -webkit-linear-gradient(top,#e50914,#db0510); */
    background-image: -moz-linear-gradient(top,#e50914,#db0510);
    background-image: -o-linear-gradient(top,#e50914,#db0510);
    background-image: linear-gradient(to bottom,#e50914,#db0510);
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,.45);
    -moz-box-shadow: 0 1px 0 rgba(0,0,0,.45);
    box-shadow: 0 1px 0 rgba(0,0,0,.45);
    border:1px solid black;
        display: inline-block;
    text-decoration: none;
    line-height: 1em;
    vertical-align: middle;
    cursor: pointer;
    font-family: Arial,sans-serif;
	}
	.btn-registrar:focus{
		border:1px solid black!important;
		outline-color: rgba(0,0,0,0) !important;
	}
	.btn-registrar:active{
		border:1px solid black!important;
	}
.footer{
	position: relative;
	z-index: 10 !important;
	background: black;	
	width: 100%;
  
	bottom:0;
	float: left;
	flex: 1;
	
}
.tin-nav {
    padding-top: 15px;
    background-color: #141414;
    border-bottom: 2px solid #3d3d3d;
    border-right: none;
}

.tin-nav-list {
    margin: 0 auto;
    padding-top: 20px;
    width: 80%;
}
li{
	float: left;
	flex: 1;
	list-style: none;
	padding: 16px 0px;
}
ul{
	width: 100%;
	height: 100px;
}


.first{
	float: left;
	cursor: pointer;
	padding: 16px 20px;
   
}
.secundary{
	margin-top:4px;
	cursor: pointer;
	float: right;
}

.target{
    padding: 16px 20px;
    border-bottom: 5px solid #e50914;
    transition: all 0.2s;
    -o-transition: all 0.2s;
    -ms-transition: all 0.2s;
    -webkit-transition: all 0.2s;
    text-decoration: none;
    }


  	@media screen and (min-width: 700px){
      .footer{
        float: left;
      
      }
  		.logo img{
  	 max-width:  167px;
  	
  	float: left;
  	}
  		.bg img.vlv-creative{
  			width: 100%;	
        min-width: 100%;
        max-height: 90vh;
  		}
  		body{
  			    background: #1a1a1a;
  			    width: 100%;

  		}
  	}
  	@media screen and (max-width: 700px){
      .shadowimg{
        width: 100%;  
        height:100vh;
        position: absolute;
        z-index: 1;
        background-image: linear-gradient(to top,rgba(5,5,5,1) 30%,rgba(15,15,15,0) 55%);
        background-image: -o-linear-gradient(to top,rgba(5,5,5,1) 30%,rgba(15,15,15,0) 55%);
        background-image: -webkit-linear-gradient(to top,rgba(5,5,5,1) 30%,rgba(15,15,15,0) 55%);
        background-image: -ms-linear-gradient(to top,rgba(5,5,5,1) 30%,rgba(15,15,15,0) 55%);
      }
      .info h1{
           text-align: center;
                font-size: 5em;
      }
      .info h3{
        font-size:2.5em;
        text-align: center;
      }
      .btn-registrar{
        position: absolute;
        left: -121px;
        margin-left: 50%;
        

      }
      .info{
          max-width: 100% !important; 
      }
      .header{
        background-image: linear-gradient(to bottom,rgba(0,0,0,0.5) 5%,rgba(0,0,0,0) 95%);
      }
      .target{

        padding:16px 5px;
      }
      ul{
        -webkit-padding-start: 0px !important;
      }
      .tin-nav-list {
    margin: 0 auto;
    padding: 0px;
   
}
.bg img.concord-img {
  float: left !important;

height: 80vh !important;
}
.bg{
  max-width: 100%;
  overflow: hidden;
}
.footer{
      margin-top: 50px;
}
  		.logo img{
  	 max-width:  75px;
  	
  	float: left;
  	}
  		.content{
  			width: 100%;
  			height: auto;
  			
  		}
  		body{
  			    background: #1a1a1a;
  			    width: 100%;
  			    

  		}
  		.bg img.vlv-creative{
  			height:60%;	
  			float: right;
  		}


  	}
  	@media screen and (max-width: 700px) and (orientation: landscape){
      .bg img.vlv-creative{
        width: 100%;
      }
      .info h1 {
    text-align: center;
    font-size: 3.9em;
    }
    .info h3 {
    font-size: 1.5em;
    text-align: center;
}

.blue {
 
 background: blue;
 
}
 
.red {
 
 background: red;
 }

  	
  	</style>
  	<script type="text/javascript">
		
	</script>
  
  	<div class="content">
  		<div class="bg">
  			
  				<div class="header">
  						<a href="https://pipocaflix.com"><div class="logo"><img src="img/logo.png"></div></a>
  						<a href="login.php"><div class="btn-login">Entrar</div></a>

  				</div>
  					<div class="shadow-bg">
  						
  					</div>
  					<div class="shadow-linear">
  						<div class="info">
  							<h1>O Futuro é Agora.</h1>
  							<h3>ASSISTA ONDE QUISER.QUANDO QUISER.</h3>
  							<button class="btn-registrar" onclick="window.location='registrar.php'">CADASTRE-SE AGORA</button>
  						</div>
  					</div>
            <div class="shadowimg"></div>
   					<img class="concord-img vlv-creative" src="https://all4desktop.com/data_images/1920%20x%201080/4184173-thor-movie-2011-normal.jpg" srcset="https://all4desktop.com/data_images/1920%20x%201080/4184173-thor-movie-2011-normal.jpg 1000w, https://all4desktop.com/data_images/1920%20x%201080/4184173-thor-movie-2011-normal.jpg 1500w, https://all4desktop.com/data_images/1920%20x%201080/4184173-thor-movie-2011-normal.jpg 1800w" alt="">

   					
   				<div class="footer">
   					<div class="tin-nav">
   						<center>
   							<div class="tin-nav-list">

   						<ul id="menu" class="bolinhas">
   							<li class="first target" id="first"><a href="pages/planos.html"><img src="img/slider-bottom3.png" onclick="removeclasss()"><br/><span class="coment">Cancelar</span></a></li>
   							<li class="secundary" id="secundary"><a href="pages/assista.html" onclick="removeclassf()"><img src="img/slider-bottom2.png"><br/><span class="coment">Aparelhos</span></a></li>

   						</ul>

					</div>


   					</div>	
            <div class="container">
       
    
  <div id="content" class="conteudo-anunc">
  <?php include_once("pages/planos.html"); ?>
<div class="center">
 

</div>
   
  </div><!-- /content -->
 <div class="suporte">
           <a href="contato@pipocaflix.com" style="color: #999;">Dúvidas? Entre em contato.</a><br/>
           <a href="termos.php" target="_blank" style="color: #999; font-size:13px;">Termos de uso.</a>
           <ul>
             <li>PipocaFlix Brasil - 2021 - Dev: Júlio</li>
           </ul>
           
          
            </div>
              </center>
   				</div>		
         
   		</div>

	</div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>