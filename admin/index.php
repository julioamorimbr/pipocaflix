<?php
session_start();
require("../conexao/conexao.php");
$idMembro = $_SESSION['IdADMIN']   ;
$loginMembro = $_SESSION['LoginADMIN'] ;
$passMembro = $_SESSION['PassADMIN'] ;
$membro_user    =   mysql_query("SELECT * FROM `login_filmes` WHERE id='$idMembro'");
$aprova =   mysql_fetch_assoc($membro_user);



$notificacao = mysql_query("SELECT * FROM `notificacao` ORDER BY id DESC");
$notificacao = mysql_num_rows($notificacao);
$top5        = mysql_query("SELECT * FROM `auth` ORDER BY id DESC LIMIT 5");

$film_cont   = mysql_query("SELECT * FROM `filmes` ORDER BY id DESC");
$cont_film   = mysql_num_rows($film_cont);
$serie_cont   = mysql_query("SELECT * FROM `series` ORDER BY title ASC");
$serie_cont1   = mysql_query("SELECT * FROM `series` ORDER BY titulo ASC");
$cont_serie   = mysql_num_rows($serie_cont);
$pagamento1   = mysql_query("SELECT * FROM `pagamento` LIMIT 0,1");
$paga1      =   mysql_fetch_assoc($pagamento1);
$pagamento2   = mysql_query("SELECT * FROM `pagamento` LIMIT 1,1");
$paga2      =   mysql_fetch_assoc($pagamento2);
$pagamento3   = mysql_query("SELECT * FROM `pagamento` LIMIT 2,1");
$paga3      =   mysql_fetch_assoc($pagamento3);
$pagamento4   = mysql_query("SELECT * FROM `pagamento` LIMIT 3,1");
$paga4      =   mysql_fetch_assoc($pagamento4);
$pagamento5   = mysql_query("SELECT * FROM `pagamento` LIMIT 4,1");
$paga5      =   mysql_fetch_assoc($pagamento5);
$pagamento6   = mysql_query("SELECT * FROM `pagamento` LIMIT 5,1");
$paga6      =   mysql_fetch_assoc($pagamento6);
$pagamento7   = mysql_query("SELECT * FROM `pagamento` LIMIT 6,1");
$paga7      =   mysql_fetch_assoc($pagamento7);

$name = explode("@" , $aprova['email']);
$name = $name[0];
$name = substr($name, 0,5);
?>

<!DOCTYPE html>
<html>
<?php $action = $_GET['action'];

?>
<style type="text/css">
.navi a{
    font-size: 13px !important;
    padding: 15px 20px !important;
}
    a:hover{
        text-decoration: none !important;
    }
</style>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Bem Vindo</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

</head>
<body>

</body>
</html>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef="home.html"><img src="img/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                        
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li <?php if($action == NULL or $action == "home"){?> class="active"<?php } ?>><a href="?action=home"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li <?php if($action == "pagamento"){?> class="active"<?php } ?>><a href="?action=pagamento"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Pagamento</span></a></li>
                        <li <?php if($action == "filmes"){?> class="active"<?php } ?> ><a href="?action=filmes"><i class="fa fa-film" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Filmes</span></a></li>
                        <li <?php if($action == "series"){?> class="active"<?php } ?>><a href="?action=series"><i class="fa fa-video-camera" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Séries</span></a></li>
                        <li <?php if($action == "stats"){?> class="active"<?php } ?> ><a href="?action=stats"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm" >Estatisticas</span></a></li>
                        <li <?php if($action == "usuario"){?> class="active"<?php } ?>><a href="?action=usuario" ><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuario</span></a></li>

                     

                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <form action="?" method="get">
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Procurar" name='q' id="search">
                            </div>
                            </form>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Usuario</a></li>
                                   
                                        <a href="?action=notificacao" class="icon-info">
                                            <i class="fa fa-bell" aria-hidden="true"></i>
                                            <span class="label label-primary"><?=$notificacao?></span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="" alt="<?=$name?>">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <span><?=$aprova['nome']?></span>
                                                    <p class="text-muted small">
                                                        <?=$aprova['email']?>
                                                    </p>
                                                    <div class="divider">
                                                    </div>
                                                    
                                                    <a href="sair.php" class="view btn-sm active">Sair</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <?php
                     $serach = mysqli_real_escape_string($con ,$_GET['q']);

                    if($action == NULL && $serach == NULL or $action == "home" && $serach == NULL ){
                        include_once("includes/home-container.php");
                      }
                      elseif($action == "stats"){
                        include_once("includes/estatisticas.php");
                      }
                    
                      elseif($action == "series"){
                        include_once("includes/series.php");
                      }
                      elseif($action == "filmes"){
                        include_once("includes/filmes.php");
                      }
                      elseif($action == "usuario"){
                        include_once("includes/usuario.php");
                      }
                      elseif($action == "newserie"){
                        include_once("includes/serie-container.php");
                      }
                       elseif($action == "newtemp"){
                        include_once("includes/temp-container.php");
                      }
                      elseif($action == "newep"){
                        include_once("includes/ep-container.php");
                      }
                      elseif($action == "pagamento"){
                        include_once("includes/pagamento.php");
                      }
                      elseif ($action == "notificacao") {
                          include_once("includes/notificacao.php");
                      }
                     
                       if($serach != NULL) {
                          include_once("includes/buscar.php");
                      }
                     ?>
                </div>



    <!-- Modal -->
    <div id="add_project" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header login-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Adicionar Usuario</h4>
                </div>
                <div class="modal-body">
                    <form action="functionPHP/adduser.php" method="POST">
                            <input type="text" placeholder="Nome:" name="nome" required="required">
                            <input type="text" placeholder="Sobrenome:" name="sobrenome" required="required">
                            <input type="text" placeholder="Email:" name="email" required="required">
                            <input type="text" placeholder="Password:" name="passsword" required="required">
                            <select name="nivel" class="form-control">
                                <option style="display: none">Nivel de acesso</option>
                                <option value="1">Administrador</option>
                                <option value="0">Membro</option>
                            </select>
                            <input type="text" id="datavalid" tabindex="2" placeholder="YYYY-MM-DD : Data da Validade" name="validade">
                            <input type="text" placeholder="Telas: Max 10" name="telas" required="required">
                            
                    </div>
                <div class="modal-footer">
                    <button type="button" class="cancel" data-dismiss="modal">Close</button>
                    <input type="submit" class="add-project" name="submit" value="Salvar">
                </form>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
            <script type="text/javascript">
                jQuery(function($) {
                  $("#phone-num").mask("?(999) 999-9999", {});
                  $("#datavalid").mask("?9999/99/99", {});
                });
            </script>
        </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
<?php ?>