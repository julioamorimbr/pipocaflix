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
$busca = "SELECT * FROM `series_ep` ORDER BY id DESC ";
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
                    <h3 class="panel-title">Séries - Episodios</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="button" class="btn btn-sm btn-primary btn-create" data-toggle="modal" data-target="#newfilm">Adicionar Novo</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">ID</th>
                        <th>Série</th>
                        <th>Titulo</th>
                        <th>Temporada</th>
                        <th>Ep Num</th>
                       
                    </tr> 
                  </thead>
                  <tbody>
                    <?php while($filmes      = mysql_fetch_assoc($limite)){ 
                    	$tag_ep = $filmes['tag_ep'];
                 		$sql = mysql_query("SELECT * FROM `series` WHERE tag_ep='$tag_ep'");
                 		$mysql = mysql_fetch_assoc($sql);

                      ?>

                          <tr>
                            <td align="center">
                               <a class="btn btn-default" data-toggle="modal" data-target="#edit<?=$filmes['id']?>" ><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href="functionPHP/exlep.php?id=<?=$filmes['id']?>"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?=$filmes['id']?></td>
                            <td><?=$mysql['title']?></td>
                            <td><?=$filmes['titulo']?></td>
                            <td><?=$filmes['temp']?></td>
                             <td><?=$filmes['num_ep']?></td>
                          
                          </tr>
                          <!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->
<div id="edit<?=$filmes['id']?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Editar Episodio <?=$filmes['titulo']?></h4>
      </div>
      <div class="modal-body">
        <form action="functionPHP/editep.php" method="POST">
            <label for="usr">Titulo:</label>
              <input type="text" class="form-control" name="nome" value="<?=$filmes['titulo']?>" id="usr" required="required">
            <label for="usr">URL:</label>
              <input type="text" class="form-control" name="url" value="<?=$filmes['link']?>" id="usr" required="required">
            <label for="usr">Episodio:</label>
              <input type="number" class="form-control" name="ep" value="<?=$filmes['num_ep']?>" id="usr" required="required">
<label for="usr">Temporada:</label>
              <input type="number" class="form-control" name="temp" value="<?=$filmes['temp']?>" id="usr" required="required">


              <input type="hidden" class="form-control" name="id_serie" value="<?=$filmes['id']?>" id="usr" required="required" >
          
              
             
              
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
                        <li><a href="?action=newep&pagina=<?=$anterior?>">«</a></li>
                        <?php } if ($pc<$tp) {
                        ?>
                        <li><a href="?action=newep&pagina=<?=$proximo?>">»</a></li>
                        <? }    ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
<!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- --><!-- -->
<div id="newfilm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header login-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Adicionar Novo Episodio</h4>
      </div>
      <div class="modal-body">
        <form action="functionPHP/cadep.php" method="POST">
            <div class="form-group">
              <label for="usr">Série:</label>
              <select  class="form-control" id="select" name="cod" onchange="javascript:HandSeries(this)">
              	<option style="display: none">Selecione uma Série</option>
<?
$serie_container = mysql_query("SELECT * FROM `series` ORDER BY title ASC");
while($serie_title = mysql_fetch_assoc($serie_container)){
?>
                <option value="<?=$serie_title['tag_ep']?>"> <?=$serie_title['title']?> </option>
                <? } ?>
              
              </select>

       
            <label for="usr">Número da Temporada:</label>
           		<input type="number" value="" id='temporada' class="form-control" name="temp" required="required">
            	

       
            <label for="usr">Número do Episodio:</label>
           		<input type="number" value="<?=$teste?>" id='temporada' class="form-control" name="ep" required="required">
           	<label for="usr">URL:</label>
           		<input type="text" value="<?=$teste?>" id='temporada' class="form-control" name="url" required="required">
            		</div>
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

<?php
unset($_SESSION['FilmAddOK'],$_SESSION['FilmAddFail']);
?>