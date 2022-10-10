<?php 





$totalcash = $pg1 + $pg2 + $pg3 + $pg4 + $pg5 + $pg6 + $pg7;
$totalcash = str_replace(".", ",", $totalcash);
$datahj   = date("Y-m-d");
$totalmbh = mysql_query("SELECT * FROM `login_filmes` WHERE create_date='$datahj'");
$totalmb = mysql_query("SELECT * FROM `login_filmes` ");
$membrototal = mysql_num_rows($totalmb);
$tmbhj 	  = mysql_num_rows($totalmbh);
$tmbhjd	  = intval($tmbhj / $membrototal * "100");



$mes = date("m");      
$ano = date("Y"); 
$ultimo_dia = date("t", mktime(0,0,0,$mes,'01',$ano)); 

$datames = $ano."-".$mes."-".$ultimo_dia;

$totalmesmb   = mysql_query("SELECT * FROM `login_filmes` WHERE create_date <='$datames'");
$tmbmes 	  = mysql_num_rows($totalmesmb);
$tmbmesd	  = intval($tmbmes / $membrototal * "100");

$visithj 		= mysql_query("SELECT * FROM `visitas_today`");
$visitmes 		= mysql_query("SELECT * FROM `visitas_month`");
$visitg 		= mysql_query("SELECT * FROM `visitas`");

$visitashj 	= mysql_num_rows($visithj);
$visitasmes = mysql_num_rows($visitmes);
$visitas 	=	mysql_num_rows($visitg);

$totalvisitasmes	  = intval($visitasmes / $visitas * "100");
$totalvisitashj 	  = intval($visitashj / $visitasmes * "100");


?>
<div class="container-fluid">
					
					
						<div class="row">
							<div class="col col-md-5">
								<h4>Estatisticas de Hoje:</h4>
										<?=$visitashj?> Visitas<span class="pull-right strong">+ <?=$totalvisitashj?>%</span>
										 <div class="progress">
											<div class="progress-bar <?php if($totalvisitashj < "40"){ ?> progress-bar-danger <? } else{ ?> progress-bar-success <? } ?>" role="progressbar" aria-valuenow="<?=$totalvisitashj?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=$totalvisitashj?>%"><?=$totalvisitashj?>%</div>
										</div>
									
										<?=$tmbhj?> Novos Usuarios<span class="pull-right strong">+ <?=$tmbhjd?>%</span>
										 <div class="progress">
											<div class="progress-bar <?php if($tmbhjd < "40"){ ?> progress-bar-danger <? } else{ ?> progress-bar-success <? } ?>" role="progressbar" aria-valuenow="<?=$tmbhjd?>"aria-valuemin="0" aria-valuemax="100" style="width:<?=$tmbhjd?>%"><?=$tmbhjd?>%</div>
										</div>
										
										
							</div>
							<div class="col col-md-5">
								<h4>Estatisticas Do Mês:</h4>
										<?=$visitasmes?> Visitas<span class="pull-right strong">+ <?=$totalvisitasmes?>%</span>
										 <div class="progress">
											<div class="progress-bar <?php if($totalvisitasmes < "40"){ ?> progress-bar-danger <? } else{ ?> progress-bar-success <? } ?>" role="progressbar" aria-valuenow="<?=$totalvisitasmes?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=$totalvisitasmes?>%"><?=$totalvisitasmes?>%</div>
										</div>
									
										<?=$tmbmes?> Novos Membro<span class="pull-right strong">+ <?=$tmbmesd?>%</span>
										 <div class="progress">
											<div class="progress-bar <?php if($tmbmesd < "40"){ ?> progress-bar-danger <? } else{ ?> progress-bar-success <? } ?> " role="progressbar" aria-valuenow="<?=$tmbmesd?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=$tmbmesd?>%"><?=$tmbmesd?>%</div>
										</div>
										
									
										
			</div>
		</div>
	</div>
	