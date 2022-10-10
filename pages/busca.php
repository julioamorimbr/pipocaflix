<?php 
$url = "acao";

$busca = mysqli_real_escape_string($con, $_GET['q']);
$order = $_GET['order'];
if($order == NULL){
  $order = "yr";
} 
if($order == NULL or $order == "yr"){
  $by = "ano Desc";  
}
elseif($order == "az"){
  $by = "titulo ASC";  
}
elseif($order == "za"){
  $by = "titulo DESC";  
}
  $series = mysql_query("SELECT * FROM `series` WHERE title LIKE '%$busca%' ORDER by " .$by) or die (mysql_error());
  
  $limite = mysql_query("SELECT * FROM `filmes` WHERE titulo LIKE '%$busca%' ORDER by " .$by);
	
 

 
?>
<div class="container view">

    <div class="row">
      <?php while ($dados = mysql_fetch_assoc($limite)) { ?>
        <div class="col-sm-6 col-xs-6">
            <div class="list mb-2">
                <div class="list-header">
                    <a href="?action=film&tag=<?=$dados['id']?>" class="list-header-image">
                      <img src="<?=$dados['img']?>">
                    </a>
                </div>
                <div class="list-content">
                    <h2><a href="?action=film&tag=<?=$dados['id']?>" class="text-black"><?=$dados['titulo']?></a></h2> 
                    <span class="list-meta">
                      <span class="list-meta-item"><i class="fa fa-clock-o"></i> <?=$dados['ano']?></span> 
                      <a href="?action=film&tag=<?=$dados['id']?>" class="list-meta-item"><i class="fa fa-star"></i> <?=$dados['votos']?></a>
                    </span>
                    <p><?=$dados['sinopse']?></p>
                </div>
            </div>
        </div>
        <?php } ?>
        
         <?php while ($dados2 = mysql_fetch_assoc($series)) { ?>
        <div class="col-sm-6 col-xs-6">
            <div class="list mb-2">
                <div class="list-header">
                    <a href="?action=serie&tag=<?=$dados2['tag_ep']?>" class="list-header-image">
                      <img src="<?=$dados2['img']?>">
                    </a>
                </div>
                <div class="list-content">
                    <h2><a href="?action=serie&tag=<?=$dados2['tag_ep']?>" class="text-black"><?=$dados2['title']?></a></h2> 
                    <span class="list-meta">
                      <span class="list-meta-item"><i class="fa fa-clock-o"></i> <?=$dados2['ano']?></span> 
                      <a href="?action=serie&tag=<?=$dados2['tag_ep']?>" class="list-meta-item"><i class="fa fa-star"></i> <?=$dados2['votos']?></a>
                    </span>
                    <p><?=$dados2['sinopse']?></p>
                </div>
            </div>
        </div>
        <?php } ?>
      
      
    </div>


</div>
<style type="text/css">
.orderby{
  margin-bottom: 5%;
  margin-top:20px;
  background: transparent;
}
.orderby select{
  background: transparent;
  color: white;
  height: 35px;
}
.orderby select option{
  background: black;
}
@media screen and (max-width: 750px) {
  .list-content{
    display: none !important;
  }

}
@media screen and (max-width: 750px){
    .view{
      float: left;
      width: 90%;
      margin-left: 5%;
      position: relative;
      top: 71px;
    }

}
.col-sm-6{
  margin-top: 5px;
}
  @media screen and (min-width: 751px){
    .view{
      float: left;
      width: 90%;
      margin-left: 5%;
      position: relative;
      top: 71px;
    }
  }
a:focus, a:hover, a:active {
    text-decoration: none;
}

.text-black {
    color: #333 !important;
}

a.text-black:focus, a.text-black:hover {
    color: #7b7b7b !important;
}



.list {
    display: block;
    background-color: rgba(255,255,255,.8);
    box-shadow: 0 1px 3px rgba(0,0,0,.12),0 1px 2px rgba(0,0,0,.24);
    border-radius: 2px;
    transition: all .2s ease-in-out;
}

.list-header {
    display: block;
    float: left;
    width: 35%;
    overflow: hidden;
    position: relative;
    border-radius: 2px 0 0 2px;
}

.list-header img {
    width: 100%;
}

.list-header .list-header-image:after {
    display: block;
    content: '';
    background-color: rgba(0,0,0,.4);
    position: absolute;
    top: 100%;
    left: 100%;
    width: 100px;
    height: 100px;
    box-shadow: 0 0 200px 100px rgba(0,0,0,.58);
    z-index: 1;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    opacity: 0;
    filter: alpha(opacity=0);
    transition: all .8s;
    -moz-transition: all .8s;
    -webkit-transition: all .8s;
    -o-transition: all .8s;
}

.list-content {
    display: block;
    margin-left: 35%;
    padding: 15px;
    position: relative;
}

.list-meta {
    display: block;
    margin-bottom: 16px;
    font-size: 13px;
    line-height: 100%;
}

.list-meta .list-meta-item {
    display: inline-block;
    margin-right: 18px;
    color: #9A9A9A;
}

.list:after {
    display: block;
    clear: both;
    content: '';
}

.list:hover {
    box-shadow: 0 10px 20px rgba(0,0,0,.19),0 6px 6px rgba(0,0,0,.23);
}



@media only screen and (max-width: 991px) {
  .list-header {
    display: block;
    width: 100%;
    padding: 0;
    border-radius: 0;
  }
  
  .list-content {
    display: block;
    width: 100%;
    margin-left: 0;
    padding: 15px;
    clear: both;
  }
} 
</style>