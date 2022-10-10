	
    	<div class="container conteudo" style="position: absolute; width: 100%; z-index: 1; color: white;">
    	
		
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->

	<?php if($qtd_lista > "0"){

		?>
			<div class="container itens">
	    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Minha Lista</span></div>
	    		
	    		<div class="owl-carousel">
	    			<?php while($lista = mysql_fetch_assoc($minhalista)){ 
	    				$type = $lista['type'];
				        if($type == "1"){
				          $tipo = "serie";
				        }
				        if($type == "2"){
				          $tipo = "film";
				        }
	    				?>

	    							  <a href="?action=<?=$tipo?>&tag=<?=$lista['id_f']?>"><img src="<?=$lista['img']?>" alt="7"></a>
	    							 <?  } ?>
				</div>
			</div>
	<?php } ?>
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->

<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
<? $anim = mysql_query("SELECT * FROM `filmes` ORDER BY ano DESC LIMIT 12");
	$cont_ani = mysql_num_rows($anim);
	if($cont_ani > 0){
		 ?>
			<div class="container itens">
	    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Lançamentos</span></div>
	    		
	    		<div class="owl-carousel">
	    			<? 	while($animacao = mysql_fetch_assoc($anim)){ ?>
				   <a href="?action=film&tag=<?=$animacao['id']?>"><img src="<?=$animacao['img']?>" alt="<?=$animacao['titulo']?>" ></a>
					<? } ?>			   
				</div>
			</div><? } ?>
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->	
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->

		<div class="container itens">
    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Séries</span></div>
    		
    		<div class="owl-carousel">
    			<?php while($serie = mysql_fetch_assoc($seriesdesc)){ ?>
			   <a href="?action=serie&tag=<?=$serie['tag_ep']?>"><img src="<?=$serie['img']?>" alt="1" ></a>
			   <? } ?>
			</div>
		</div>

<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
	<? $anim = mysql_query("SELECT * FROM `filmes` ORDER BY id DESC LIMIT 12");
	$cont_ani = mysql_num_rows($anim);
	if($cont_ani > 0){
		 ?>
			<div class="container itens">
	    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Ultimos filmes Adicionados</span></div>
	    		
	    		<div class="owl-carousel">
	    			<? 	while($animacao = mysql_fetch_assoc($anim)){ ?>
				   <a href="?action=film&tag=<?=$animacao['id']?>"><img src="<?=$animacao['img']?>" alt="<?=$animacao['titulo']?>" ></a>
					<? } ?>			   
				</div>
			</div><? } ?>

<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
	<? $anim = mysql_query("SELECT * FROM `filmes` ORDER BY votos DESC LIMIT 12");
	$cont_ani = mysql_num_rows($anim);
	if($cont_ani > 0){
		 ?>
			<div class="container itens">
	    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Filmes Mais Votados</span></div>
	    		
	    		<div class="owl-carousel">
	    			<? 	while($animacao = mysql_fetch_assoc($anim)){ ?>
				   <a href="?action=film&tag=<?=$animacao['id']?>"><img src="<?=$animacao['img']?>" alt="<?=$animacao['titulo']?>" ></a>
					<? } ?>			   
				</div>
			</div><? } ?>

<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->
<? $anim = mysql_query("SELECT * FROM `series` ORDER BY votos DESC LIMIT 12");
	$cont_ani = mysql_num_rows($anim);
	if($cont_ani > 0){
		 ?>
			<div class="container itens">
	    		<div class="classes"><span style="color: rgba(255,255,255,.8);">Séries Mais Votadas</span></div>
	    		
	    		<div class="owl-carousel">
	    			<? 	while($animacao = mysql_fetch_assoc($anim)){ ?>
				   <a href="?action=serie&tag=<?=$animacao['tag_ep']?>"><img src="<?=$animacao['img']?>" alt="<?=$animacao['title']?>" ></a>
					<? } ?>			   
				</div>
			</div><? } ?>
<!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  --><!--  -->	
 <div class="contador" style="">
   <script id="_wau1uc">var _wau = _wau || []; _wau.push(["dynamic", "5hfo4kk4ty", "1uc", "c4302bffffff", "small"]);</script><script async src="//waust.at/d.js"></script>
   </div>