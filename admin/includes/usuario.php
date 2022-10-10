<style type="text/css">
    .panel-table .panel-body{
  padding:0;
}

.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
    text-align:center;
    width: 100px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:last-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:last-of-type {
  border-right: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr > th:first-of-type,
.panel-table .panel-body .table-bordered > tbody > tr > td:first-of-type {
  border-left: 0px;
}

.panel-table .panel-body .table-bordered > tbody > tr:first-of-type > td{
  border-bottom: 0px;
}

.panel-table .panel-body .table-bordered > thead > tr:first-of-type > th{
  border-top: 0px;
}

.panel-table .panel-footer .pagination{
  margin:0; 
}

/*
used to vertically center elements, may need modification if you're not using default sizes.
*/
.panel-table .panel-footer .col{
 line-height: 34px;
 height: 34px;
}

.panel-table .panel-heading .col h3{
 line-height: 30px;
 height: 30px;
}

.panel-table .panel-body .table-bordered > tbody > tr > td{
  line-height: 34px;
}
.link{
    max-width: 190px; /* Tamanho */
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap
}



</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<?php
$busca = "SELECT * FROM `login_filmes` ORDER BY email asc";
$total_reg = "10"; // número de registros por página
$pagina=$_GET['pagina'];
  if (!$pagina) {
  $pc = "1";
  } else {
  $pc = $pagina;
  }
   $inicio = $pc - 1;
  $inicio = $inicio * $total_reg;
    $limite = mysql_query("$busca LIMIT $inicio,$total_reg");
  $todos = mysql_query("$busca");
 
  $tr = mysql_num_rows($todos); // verifica o número total de registros
  $tp = $tr / $total_reg; // verifica o número total de páginas
 



$filmsucessadd = $_SESSION['FilmAddOK'];
$filmfailadd    =   $_SESSION['FilmAddFail'];
if($filmsucessadd){
 ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sucesso!</strong> <?=$filmsucessadd?>
</div>
<? }  
if($filmfailadd){
 ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> <?=$filmfailadd?>.
</div>
<? } ?>    
       

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Usuarios</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Nome Completo</th>
                        <th>E-mail</th>
                        <th>Status</th>
                    
                    

                    </tr> 
                  </thead>
                  <tbody>

                    <?php while($filmes      = mysql_fetch_assoc($limite)){ ?>
                            <?php 
                            $user_id = $filmes['id'];
                            $nom = mysql_query("SELECT * FROM `perfil_login` WHERE id='$user_id' ORDER BY id ASC");
                            $nome = mysql_fetch_assoc($nom);
                            ?>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default" data-toggle="modal" data-target="#edit<?=$filmes['id']?>" ><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href="functionPHP/exluser.php?id=<?=$filmes['id']?>"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?=$filmes['id']?></td>
                            <td><?=$nome['nome']." ".$nome['sobrenome']?></td>
                            <td><?=$filmes['email']?></td>
                            <td><?php if($filmes['pg_aproved'] == 1){echo "Pago";} elseif($filmes['pg_aproved'] == 0){echo "Pendente";} ?></td>

                          </tr>
                          <!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->
<div id="edit<?=$filmes['id']?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Usuario <?=$filmes['email']?></h4>
      </div>
     <div class="modal-body">
        <form action="functionPHP/edituser.php" method="POST">
              <input type="hidden" name='idmf' value="<?=$filmes['id']?>"/>
              <label for="usr">Email:</label>
              <input type="text" class="form-control" name="email" value="<?=$filmes['email']?>" id="usr" >
              <label for="usr">Plano:</label>
              <input type="text" class="form-control" name="plano" value="<?=$filmes['date_create']?>" id="usr" >
              <label for="usr">Telas: <strong style="color:red;">MAX 10</strong></label>
              <input type="text" class="form-control" name="tela" value="<?=$filmes['simultaneo_max']?>" id="usr" >
              <label for="usr">Nivel:</label>
              <select class="form-control" name="nivel">
               <option <?php if($filmes['nivel'] == 1) {?> selected="selected" <? }?> value="1" >Administrador</option>
               <option <?php if($filmes['nivel'] == 0) {?> selected="selected" <? }?> value="0" >Membro</option>
              </select>   
              <label for="usr">Validade da Conta:</label>
              <select class="form-control" name="validate">
               <option <?php if($filmes['validate'] == 1) {?> selected="selected" <? }?> value="1" >Validada</option>
               <option <?php if($filmes['validate'] == 0) {?> selected="selected" <? }?> value="0" >Pendente</option>
              </select>
              <label for="usr">Status de Pagamento:</label>
              <select class="form-control" name="statuspg">
               <option <?php if($filmes['pg_aproved'] == 1) {?> selected="selected" <? }?> value="1" >Pago</option>
               <option <?php if($filmes['pg_aproved'] == 0) {?> selected="selected" <? }?> value="0" >Pendente</option>
              </select>
              <label for="usr">Tel: <?=$filmes['tel']?></label>

              
      </div>
      <div class="modal-footer">
      
      <input type="submit" name="submit" class="btn btn-success" value="Cadastrar"/>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->
                        <? } ?>

                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Total: <?=$tr?>
                  </div>
                  <div class="col col-xs-8">
                    
                    <ul class="pagination  pull-right">
                                       <?php 
                          $anterior = $pc -1;
                          $proximo = $pc +1;

                          if ($pc>1) {
                          ?>
                        <li><a href="?action=usuario&pagina=<?=$anterior?>">«</a></li>
                        <?php } if ($pc<$tp) {
                        ?>
                        <li><a href="?action=usuario&pagina=<?=$proximo?>">»</a></li>
                        <? }    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->

<?php
unset($_SESSION['FilmAddOK'],$_SESSION['FilmAddFail']);
?>