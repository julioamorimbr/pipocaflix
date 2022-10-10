<?php
date_default_timezone_set("Brazil/East");
require("functionPHP/protege.php");
require("conexao/conexao.php");
$membro   = mysql_query("SELECT * FROM `login_filmes` WHERE id ='$idM' LIMIT 1");
$codmemb  = mysql_fetch_assoc($membro);
$mail     = $codmemb['email'];
$codm     = $codmemb['cod'];
$perfil   = mysql_query("SELECT * FROM `perfil_login` WHERE cod='$codm' LIMIT 3");


$Simultaneo= $_SESSION['Simultaneo'];
?>
<title>Browser - PipocaFlix</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<style type="text/css">
  body {
  background: #141414;
  font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
  font-weight: 300;
  color: #6D6D6D;
  opacity: 0;
  animation: fade-in 500ms ease 200ms 1 forwards;
}
body h1 {
  color: #fff;
  font-size: 50px;
}
body a {
  padding: 5px 15px;
  color: #6D6D6D;
  font-size: 17px;
  text-decoration: none;
  text-transform: uppercase;
  border: 1px solid #6D6D6D;
  transition: all 300ms ease;
}
body a:hover {
  color: #EBECEC;
  border: 1px solid #EBECEC;
}

@keyframes fade-in {
  0% {
    opacity: 0;
    transform: scale(1.2);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
.logo {
  width: 110px;
  height: 30px;
  margin: 15px 60px;
  background: url("img/logo.png") no-repeat;
  background-size: 100%;
}

.wrapper {
  margin: 100px 0;
  text-align: center;
}

.profile {
  width: 150px;
}
.profile-wrap {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 800px;
  margin: 50px auto;
}
.profile-icon {
  width: 150px;
  height: 150px;
  border: 6px solid #1f1f1f;
  transition: all 300ms ease;
}
.profile-name {
  margin: 20px 0;
  line-height: 1.25em;
  transition: all 300ms ease;
}

.profile:hover .profile-icon {
  border: 6px solid #EBECEC;
}

.profile:hover .profile-name {
  color: #EBECEC;
}

.profile1 #left-brow {
  transform-origin: center 80%;
  animation: raise 10s ease-in-out infinite;
}
.profile1 #sunglasses {
  transform-origin: center 100%;
  animation: tilt 10s 250ms ease infinite;
}
.profile1 #mustache {
  transform-origin: center 90%;
  animation: mustache 10s 0ms ease infinite;
}

@keyframes raise {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  10% {
    transform: translateY(-10px) rotate(5deg);
  }
  20% {
    transform: translateY(-10px) rotate(5deg);
  }
  25% {
    transform: translateY(0px) rotate(0deg);
  }
  100% {
    transform: translateY(0px);
  }
}
@keyframes tilt {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  10% {
    transform: translateY(-2px) rotate(5deg);
  }
  20% {
    transform: translateY(-2px) rotate(5deg);
  }
  25% {
    transform: translateY(0px) rotate(0deg);
  }
  100% {
    transform: translateY(0px);
  }
}
@keyframes mustache {
  20% {
    transform: translateY(0px) scale(1);
  }
  30% {
    transform: translateY(4px) rotate(-3deg) scale(1.03);
  }
  40% {
    transform: translateY(0px) scale(1);
  }
}
.profile2 #left-pupil, .profile2 #right-pupil {
  animation: side-to-side 10s ease-in-out infinite alternate;
}
.profile2 #left-eye-top, .profile2 #right-eye-top {
  transform-origin: center bottom;
  animation: wide-open 10s ease-in-out infinite alternate;
}
.profile2 #bottom-beak, .profile2 #gillard {
  transform-origin: center top;
  animation: chew 20s ease-in-out infinite;
}
.profile2 #hair {
  animation: hair 4s ease infinite alternate;
}

@keyframes side-to-side {
  0% {
    transform: translateX(0px);
  }
  5% {
    transform: translateX(-5px);
  }
  10% {
    transform: translateX(-5px);
  }
  20% {
    transform: translateX(5px);
  }
  25% {
    transform: translateX(5px);
  }
  35% {
    transform: translateX(-5px);
  }
  40% {
    transform: translateX(-5px);
  }
  45% {
    transform: translateX(0px);
  }
}
@keyframes wide-open {
  0% {
    opacity: 0;
  }
  40% {
    opacity: 0;
    transform: scale(1, 0);
  }
  42% {
    opacity: 1;
    transform: scale(1, 1);
  }
  100% {
    opacity: 1;
    transform: scale(1, 1);
  }
}
@keyframes chew {
  0% {
    transform: translateY(0px) rotate(0deg);
  }
  2% {
    transform: translateY(3px) rotate(-3deg);
  }
  4% {
    transform: translateY(0px) rotate(0deg);
  }
  6% {
    transform: translateY(3px) rotate(-3deg);
  }
  8% {
    transform: translateY(0px) rotate(0deg);
  }
  10% {
    transform: translateY(3px) rotate(-3deg);
  }
  12% {
    transform: translateY(0px) rotate(0deg);
  }
  14% {
    transform: translateY(3px) rotate(0deg);
  }
  18% {
    transform: translateY(0px) rotate(0deg);
  }
  26% {
    transform: translateY(15px);
  }
  78% {
    transform: translateY(15px);
  }
  80% {
    transform: translateY(0px) rotate(0deg);
  }
  100% {
    transform: translateY(0px) rotate(0deg);
  }
}
@keyframes hair {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1, 0.8);
  }
  100% {
    transform: scale(1);
  }
}
.profile3 svg {
  animation: bg-fade 10s ease infinite;
}
.profile3 svg #smile {
  width: 100px;
}

@keyframes bg-fade {
  0% {
    background: #86A546;
  }
  40% {
    background: #86A546;
  }
  45% {
    background: #E09927;
  }
  55% {
    background: #E09927;
  }
  60% {
    background: #86A546;
  }
}
.profile4 {
  background-image: url("https://i.gyazo.com/aa72f20bdacb2e23beb7b065a6b43739.png");
  background-size: cover;
}
.gerenciar{
  color: rgba(70,70,70,.8);
  position: absolute;
  width: 150px;
  font-size: 60px;
}
.gerenciar i{
  
  margin-top:calc(50% - 25px );
}
.add-acc{
  font-size: 100px;
}
.alert{
  width: 100%;
  padding:15px 0px;
  position: absolute;
  z-index: 3;
  bottom: 0;
  font-size: 12px;
}
.sucess{
  background:green;
  color: white;

}
.danger{
  background: rgba(180,0,0,1);
  color: white;

}
.sucess strong{
  margin-left: 5%;
  font-size: 15px;
}
.danger strong{
  margin-left: 5%;
  font-size: 15px;
}
</style>
<?php
$action = $_GET['action'];
if($action == NULL){
include_once("pages/pics.php");
?>
<div class="logo"></div>


</div>
<div class="wrapper">
  <h1>Quem está assistindo?</h1>
  <div class="profile-wrap">
<?php while ($profile = mysql_fetch_assoc($perfil)) {
?>
<?php 
        $res = $_GET['res'];
        ?>
    <div class="profile" <?php if($res == NULL){ ?> onclick="window.location.href='?action=welcome&id=<?=$profile['id']?>&cod=<?=$profile['cod']?>'<? } ?> ">
      <?php 
        $res = $_GET['res'];
        if($res == "gerenciar"){
      ?>
      <div class="gerenciar" onclick="window.location.href='?action=edit&id=<?=$profile['id']?>'">
       <i class="fa fa-pencil-square" aria-hidden="true"></i>
      </div>
      <? } ?>
      <div class="profile-icon profile1">
         <svg class="<?=$profile['color']?>" width="150" height="150" viewBox="0 0 200 200"><use xlink:href="#<?=$profile['img']?>"></use></svg>
      </div>
      <div class="profile-name">
        <?=$profile['nome']?>
      </div>
    </div>

<?php   # code...
} ?>
    
    <div class="profile" onclick="window.location.href='?action=add'" >
      
      <div class="profile-name add-acc">
        <i class="fa fa-plus" aria-hidden="true"></i>
      </div>
    </div>
  </div>
  <? if($res == NULL){ ?>
  <a href="?res=gerenciar">Gerenciar Perfil</a>
  <? }  else{ ?>
  <a href="?">Concluir</a>
  <? } ?>
</div>
 
<?
  

   }
   
   if($action == "welcome"){
  $idp = mysqli_real_escape_string($conn, $_GET['id']);
  $cod = mysqli_real_escape_string($conn, $_GET['cod']);
  
  $_SESSION['idPerfil'] = $idp;
    $profilep = mysql_query("SELECT * FROM `perfil_login` WHERE id='$idp' && cod='$cod' LIMIT 1");
   $profile  = mysql_fetch_assoc($profilep);
   $profile_con = mysql_num_rows($profilep);
   if($profile_con > 0){
  include_once("pages/welcome.php");
  
  }if($profile_con == 0){
  ?>
  <h1 style="width: 100%; text-align: center; margin-top:20vh; float:left;	">Perfil Inexistente</h1>
  	<?
  }
} 

elseif($action == "add"){
  include_once("pages/pics.php");
  ?>

  <style type="text/css">
    .add{
      width: 300px;
      
      
      position: absolute;
      left: -150px;
      margin-left: 50%; 
    }
    input{
      width: 90%;
      margin-left: 5%;
      height: 35px;
      border:1px solid black;

    }
    input:first-child{
      margin-top: 5%;
    }
    input{
      margin-top: 1%;
    }
    input:last-child{
      margin-top:5%;
    }
    input[type=submit]{
      background:rgba(150, 0,0,1);
      color:white;
    }
    button{
      width: 90%;
      height: 35px; 
      margin-left: 5%;
    }
    button.continuar{
      background: linear-gradient(to top, rgba(180,0,0,1),red);
      border:none;
      color: white;
      margin-bottom: 2px;
    }
    .profile-icon{
      border:none;
      width: 30px;
      height: 30px;
      float: left;
      margin-bottom: 5%;
      margin-left: 1px;
    }
    .related{
      width: 150px;
      margin-left: 75px;
      float:inherit;
      clear: both;
    }
  </style>
  <div class="add">
     
   <form>
  



      <div class="profile-icon " id='' >
         <svg class="yellow" width="30" id='chicken' height="30" ><use xlink:href="#chicken"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="red" width="30" height="30" id='robot' ><use xlink:href="#robot"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="black" width="30" height="30" id='superheroman'><use xlink:href="#superheroman"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='mummy' ><use xlink:href="#mummy"></use></svg>
      </div>
    <div class="profile-icon">
         <svg class="black" width="30" height="30" id='moustache'><use xlink:href="#moustache"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="blue" width="30" height="30" id='ninja'><use xlink:href="#ninja"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="black" width="30" height="30" id='pirate' ><use xlink:href="#pirate"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="red" width="30" height="30" id='superherowoman'><use xlink:href="#superherowoman"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='laughing'><use xlink:href="#laughing"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='monster'><use xlink:href="#monster"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="blue" width="30" height="30" id='smiley'><use xlink:href="#smiley"></use></svg>
      </div>

      <input type="hidden" value='<svg class="red" width="130" height="130"><use xlink:href="#smiley"></use></svg>'  class="form-control" id="teste" name="select" placeholder="select">
  <div class="related">
    <svg class="red" width="130" id='smiley' height="130"><use xlink:href="#smiley"></use></svg>
  </div>

      <input type="hidden" id="cor" value="red" name="cor">
      <input type="hidden" id="svgname" value="smiley" name="svgname">
     <input type="text" class="form-control" name="name" id="nome" placeholder="Nome" required="required">
     <input type="text" class="form-control" name="sname" id="snome" placeholder="Sobrenome" required="required">
     
   </form> 
   <button class="continuar">Continuar</button>  
 <button onclick="window.location.href='?'" >Concluir</button>
  </div>
<? if($_SESSION['OkPerfil'] != NULL){?>
<div class="alert sucess">
  <strong>Sucesso</strong> <?=$_SESSION['OkPerfil']?>
</div>
<? } ?>
<? if($_SESSION['NMax'] != NULL){?>
<div class="alert danger">
  <strong>Error</strong> <?=$_SESSION['NMax']?>
</div>
<? } unset($_SESSION['NMax'], $_SESSION['OkPerfil']); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("svg").click(function(){
      var name = this.id; 
      var cor = $(this).attr('class'); 
        $("input#teste").val('<svg class="'+cor+'" width="130" height="130"><use xlink:href="#'+name+'"></use></svg>');
        $("input#cor").val(cor);
        $("input#svgname").val(name);
        var text = $("input#teste").val();
        $('div.related').html(text);
    });
});
</script>
<script>
$(document).ready(function(){
    $("button.continuar").click(function(){
      var nome = $("input#nome").val();
      var snome = $("input#snome").val();
      var cor = $("input#cor").val();
      var svg = $("input#svgname").val();
      location.href="browser.php?action=savemb&email=<?=$mail?>&nome="+nome+"&snome="+snome+"&cor="+cor+"&svg="+svg;
    });
});
</script>



  <?
}elseif($action== "savemb"){
  ?>

  <?
  $email = mysqli_real_escape_string($conn, $_GET['email']);
  $nome = mysqli_real_escape_string($conn, $_GET['nome']);
  $snome = mysqli_real_escape_string($conn, $_GET['snome']);
  $cor = mysqli_real_escape_string($conn, $_GET['cor']);
  $svg = mysqli_real_escape_string($conn, $_GET['svg']);

  $consulta = mysql_query("SELECT * FROM `perfil_login` WHERE cod='$codm'");
  $mostra_n = mysql_num_rows($consulta);

  if($mostra_n >= 0 && $mostra_n < 3){
    $sql   = mysql_query("SELECT * FROM `perfil_login` WHERE nome='$nome' && email='$email' ");
    $sql_f =  mysql_num_rows($sql);

    if($sql_f >= 1){
      $_SESSION['NMax'] = "Perfil já existente!";
      ?><script type="text/javascript">window.history.back(-1);</script><?
    }elseif($sql_f == 0){
      $insert = "INSERT INTO `perfil_login`( `email`, `nome`, `sobrenome`, `img`, `color`, `cod`) VALUES ('$email','$nome','$snome','$svg','$cor','$codm')";
      $insert = mysql_query($insert);
      if($insert){ 
       $_SESSION['OkPerfil'] = "Novo Perfil adicionado com sucesso!";
       ?><script type="text/javascript">window.history.back(-1);</script><?
    }
    }

   
  }elseif($mostra_n >= 3){
    $_SESSION['NMax'] = "Limite maximo de contas atingido!";
    ?><script type="text/javascript">window.history.back(-1);</script><?
    }
  }
    if($action == "edit"){
include_once("pages/pics.php");
  ?>

  <style type="text/css">
    .add{
      width: 300px;
      
      
      position: absolute;
      left: -150px;
      margin-left: 50%; 
    }
    input{
      width: 90%;
      margin-left: 5%;
      height: 35px;
      border:1px solid black;

    }
    input:first-child{
      margin-top: 5%;
    }
    input{
      margin-top: 1%;
    }
    input:last-child{
      margin-top:5%;
    }
    input[type=submit]{
      background:rgba(150, 0,0,1);
      color:white;
    }
    button{
      width: 90%;
      height: 35px; 
      margin-left: 5%;
    }
    button.continuar{
      background: linear-gradient(to top, rgba(180,0,0,1),red);
      border:none;
      color: white;
      margin-bottom: 2px;
    }
    .profile-icon{
      border:none;
      width: 30px;
      height: 30px;
      float: left;
      margin-bottom: 5%;
      margin-left: 1px;
    }
    .related{
      width: 150px;
      margin-left: 75px;
      float:inherit;
      clear: both;
    }
  </style>
  <div class="add">
     
   <form>
  <?php
      $idlogin = mysqli_real_escape_string($conn, $_GET['id']);
      $script = mysql_query("SELECT * FROM `perfil_login` WHERE id='$idlogin' LIMIT 1");
      $dados = mysql_fetch_assoc($script);  
   ?>



      <div class="profile-icon " id='' >
         <svg class="yellow" width="30" id='chicken' height="30" ><use xlink:href="#chicken"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="red" width="30" height="30" id='robot' ><use xlink:href="#robot"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="black" width="30" height="30" id='superheroman'><use xlink:href="#superheroman"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='mummy' ><use xlink:href="#mummy"></use></svg>
      </div>
    <div class="profile-icon">
         <svg class="black" width="30" height="30" id='moustache'><use xlink:href="#moustache"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="blue" width="30" height="30" id='ninja'><use xlink:href="#ninja"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="black" width="30" height="30" id='pirate' ><use xlink:href="#pirate"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="red" width="30" height="30" id='superherowoman'><use xlink:href="#superherowoman"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='laughing'><use xlink:href="#laughing"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="yellow" width="30" height="30" id='monster'><use xlink:href="#monster"></use></svg>
      </div>
      <div class="profile-icon">
         <svg class="blue" width="30" height="30" id='smiley'><use xlink:href="#smiley"></use></svg>
      </div>

     <input type="hidden" value='<svg class="<?=$dados['color']?>"  width="130" height="130"><use xlink:href="#<?=$dados['img']?>"></use></svg>'  class="form-control" id="teste" name="select" placeholder="select">
  <div class="related">
    <svg class="<?=$dados['color']?>" width="130" id='<?=$dados['img']?>' height="130"><use xlink:href="#<?=$dados['img']?>"></use></svg>
  </div>
      <input type="hidden" id="cor" name="cor" value="<?=$dados['color']?>">
      <input type="hidden" id="svgname" name="svgname" value="<?=$dados['img']?>">
     <input type="text" class="form-control" name="name" value="<?=$dados['nome']?>" id="nome" placeholder="Nome" required="required">
     <input type="text" class="form-control" name="sname" value="<?=$dados['sobrenome']?>" id="snome" placeholder="Sobrenome" required="required">
     
   </form> 
   <button class="continuar">Continuar</button>  
   <button class="exl">Excluir Perfil</button>  
 <button onclick="window.location.href='?'" >Concluir</button>
  </div>
<? if($_SESSION['OkPerfil'] != NULL){?>
<div class="alert sucess">
  <strong>Sucesso</strong> <?=$_SESSION['OkPerfil']?>
</div>
<? } ?>
<? if($_SESSION['NMax'] != NULL){?>
<div class="alert danger">
  <strong>Error</strong> <?=$_SESSION['NMax']?>
</div>
<? } unset($_SESSION['NMax'], $_SESSION['OkPerfil']); 
$rand = rand(100000,90000000);
$_SESSION['ExlToken'] = $rand;

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("svg").click(function(){
      var name = this.id; 
      var cor = $(this).attr('class'); 
        $("input#teste").val('<svg class="'+cor+'" width="130" height="130"><use xlink:href="#'+name+'"></use></svg>');
        $("input#cor").val(cor);
        $("input#svgname").val(name);
        var text = $("input#teste").val();
        $('div.related').html(text);
    });
});
</script>
<script>
$(document).ready(function(){
    $("button.continuar").click(function(){
      var nome = $("input#nome").val();
      var snome = $("input#snome").val();
      var cor = $("input#cor").val();
      var svg = $("input#svgname").val();
      location.href="browser.php?action=editmb&nome="+nome+"&snome="+snome+"&cor="+cor+"&svg="+svg+"&id=<?=$idlogin?>";
    });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("button.exl").click(function(){
      
      if(confirm("Deseja Excluir a Conta?")){
        window.location.href="functionPHP/exlperfil.php?token=<?=$rand?>&id=<?=$idlogin?>&cod=<?=$codm?>";

      }else{
      
      }
    });

  });
</script>
<?php } elseif($action== "editmb"){
  ?>

  <?
  $email = mysqli_real_escape_string($conn, $_GET['email']);
  $nome = mysqli_real_escape_string($conn, $_GET['nome']);
  $snome = mysqli_real_escape_string($conn, $_GET['snome']);
  $cor = mysqli_real_escape_string($conn, $_GET['cor']);
  $svg = mysqli_real_escape_string($conn, $_GET['svg']);
  $idlogin = mysqli_real_escape_string($conn, $_GET['id']);




   
      $insert = "UPDATE `perfil_login` SET `nome`='$nome',`sobrenome`='$snome',`img`='$svg',`color`='$cor' WHERE id='$idlogin'";
      $insert = mysql_query($insert);
      if($insert){ 
       $_SESSION['OkPerfil'] = "As Informações foram alteradas com sucesso!";
       ?><script type="text/javascript">window.history.back(-1);</script><?
    }else{
       $_SESSION['NMax'] = "Não Foi Possivel alterar o seu Perfil!";
       ?><script type="text/javascript">window.history.back(-1);</script><?
    }
    

   
  }
  
