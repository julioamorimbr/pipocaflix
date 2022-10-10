<style type="text/css">
    #QtdAdomodacaoDuplo{
        
        background:transparent;
        font-weight: bold;
        border:none;
        padding: 10px;
        color:rgba(230,230,230,1);
        outline: none;
    }
    #QtdAdomodacaoDuplo option{
        background:black;
    }
    .BlockD{
        display: block !important;
    }
    a{
        text-decoration: none;
        color: white;
        
    }
    a:hover{
        text-decoration: none;
    }
    .Epi{
        width: 92vw;
        height: 100px;
       
        padding: 5px;
        border-bottom: 2px solid black;
    }
    .container-ep{
        color: white;
        float: left;
    }
  #bg-img{
    float: right;
  }
  #bg-img{
    overflow: hidden;
    max-height: 580px;
  }
  .shadow-bg-linear{
    position: absolute;
    background:linear-gradient(to right, rgba(0,0,0,1) 30%,rgba(0,0,0,0) 90%);
    max-height: 580px;
    height: 100%;
  }
.play{
  width: 100%;
  height: 450px;
  overflow: hidden;
  position: absolute;
  z-index: 2;
}
.glyphicon-play{
  position: absolute;
  color: white;
  right: 0;
  font-size: 50px;
  top: 50%;
  margin-top:-49px;
  right: 25%;
  z-index: 3;
  padding: 20px;
  border:4px solid white;
  border-radius: 50%;
}
.glyphicon-ok{
  font-size: 18px;
  border:2px solid rgba(150,150,150,1) ;
  margin-right: 10px;
  padding: 10px;
  border-radius: 50px;
  position: relative;
}
.mylist{
  font-weight: bold;
  font-size: 17px;
  position: absolute;
  z-index: 5;

}

.glyphicon-ok:hover{
  font-size:20px;
  padding: 12px;
  transition: all .5s;
-o-transition: all .5s;
-webkit-transition: all .5s;
-ms-transition: all .5s;

  cursor: pointer;
  color: rgba(180,180,180,1);
}
.header{
      background: rgba(0,0,0,1);
}
.menu-bg{
  background: rgba(0,0,0,.7) !important;
}
.play{
  margin-top:70px;
}
.info-view{
  width: 30%;
  height: 100%;
  float:left;
  margin-left: 4%;
  color: white;
}
.title-view{
  font-size: 20px;
  font-weight: bold;
  padding:  0px;
}
.title-view-div{
  padding: 30px 0px;
}
@media screen and (max-width: 700px){
  #bg-img{
    overflow: hidden;
    max-height: 300px;
  }
  .shadow-bg-linear{
    position: absolute;
    background:linear-gradient(to right, rgba(0,0,0,1) 40%,rgba(0,0,0,0) 90%);
    max-height: 250px;
    height: 100%;

  }
.play{
  width: 100%;
  height: 250px;
  overflow: hidden;
  position: absolute;
  z-index: 2;
}
.glyphicon{
  position: absolute;
  color: white;
  right: 0;
  font-size: 30px;
  top: 50%;
  margin-top:-49px;
  right: 20%;
  z-index: 3;
  padding: 15px;
  border:4px solid white;
  border-radius: 50%;
}


.play{
  margin-top:70px;
}
.info-view{
  width: 40%;
  height: 100%;
  float:left;
  margin-left: 4%;
  color: white;
}
.title-view{
  font-size: 15px;
  font-weight: bold;
  padding:  0px;
}
.title-view-div{
  padding: 10px 0px;
}
.sinopse-view{
  font-size: 10px;
  height: 200px;
}
}
#menu{
  position: absolute;
  z-index: 5;
  bottom: 0;
  font-weight: bold;
  font-size: 15px;
  width: 100%;
}

.btn-ep{
  float: left;
  cursor: pointer;
  background-color: transparent;
  color: rgba(200,200,200,1);
  border:none;
  bottom: 0;
  margin-right: 15px;
}
.active-btn{
   border-bottom: 4px solid rgba(220,0,0,1);
}
.btn-ep:first-child{
    left: -45px;
    margin-left: 40% !important;
}
@media screen and (max-width: 751px){
.btn-ep:first-child{
  margin-left: 0% !important;
}
}
.remov{
  display: none;
}
.ep-content{
  position: absolute;
  z-index: 5;
width: 100%;

}
#menu{
  position: absolute;
  z-index: 5;
  bottom: 0;
  margin-bottom: -0px;
}
#menu a{
  text-decoration: none;
  color: rgba(230,230,230,1);
}
.t{
  margin-top: 1%;
  position: absolute;
  width: 100%;
}
li{
  list-style: none; 
  padding: 10px;
}
.episodio-div{
position: absolute;
z-index: 3;
display: none;
left: 0;
width: 80% !important;
margin-left: 5%;
flex: 1;
}
.temporada{
  position: absolute;
  width: 100%;
}
@media screen and (max-width: 751px){
 .shadow-bg-linear{
  width: 100%;
  height: 100%;
 }
 .episodio-div{
  width: 80%;
  height: 100%;
 }
 .container select{
  background: transparent;
  color: white;
  background-color: black;
 }
 .container select option{
  background: transparent !important;
 }
}
.container select{
  background: transparent;
  color: white;
  background-color: black;
 }
 .container select option{
  background: transparent !important;
 }
 .temporadaepn{
  position: absolute;
  color: red  ;
  font-weight: bold;
  bottom: 0;
  margin-bottom: 0px;
  margin-left: 5px;
  font-size: 22px;
 }
 .t{
display: none;
 }
 .episodio-div{
  width: 100%;
 }
 .active-t{
  display: block;
 }
@media screen and (max-width: 750px){
  .mylist{
    position: absolute;
    right: 0;
    top: 0;
  margin-top: 10px;
  margin-right: 25px;   
  }
  .glyphicon-ok{
    font-size: 12px;
    padding: 5px;
    position: relative;
    right: 0;
  }
  .img_ep{

  }
}
</style>
<script type="text/javascript">
 function epsodio(){
  $('.sinopse-view').css('display','none');
  $( ".btn-geral" ).removeClass( "active-btn" );
  $( ".epsodio" ).addClass( "active-btn" );
  $(".mylist").css('display','none');
  $('.episodio-div').css('display','block');
  $('btn-geral').addClass("mobile-btn");
 };

  
</script>
<script type="text/javascript">
  function geral(){
  $('.sinopse-view').css('display','block');
  $( ".epsodio" ).removeClass( "active-btn" );
  $(".mylist").css('display','block');
  $( ".btn-geral" ).addClass( "active-btn" );
  $('.episodio-div').css('display','none');
 };
</script>

  <script type="text/javascript">
  $(document).ready(function(){
    var content = $('#content');

    //pre carregando o gif
    loading = new Image(); loading.src = 'loading.gif';
    $('#menu a').live('click', function( e ){
      e.preventDefault();
      content.html( '<img src="loading.gif" />' );

      var href = $( this ).attr('href');
      $.ajax({
        url: href,
        success: function( response ){
          //forçando o parser
          var data = $( '<div>'+response+'</div>' ).find('#content').html();

          //apenas atrasando a troca, para mostrarmos o loading
          window.setTimeout( function(){
            content.fadeOut('fast', function(){
              content.html( data ).fadeIn();
            });
          }, 200 );
        }
      });

    });
  });
  </script>
<?php if($action == "film"){?>
<div class="play">
    <div class="header-img">
        <div class="bg-shadow" id="shadow"></div>
      
            </div>
            <a href="play.php?tag=filme&id=<?=$_GET['tag']?>"><span class="glyphicon glyphicon-play"></span></a>
            <div class="shadow-bg-linear">
              <div class="info-view">
                
                  <div class="title-view-div"><span class="title-view"><?=$filmdesc['titulo']?></span></div>
                  <p class="sinopse-view"><?=substr($filmdesc['sinopse'] , 0, 360)."..."?></p>
                  <div class="mylist" onclick="window.location.href='functionPHP/addlist.php?t=2&id=<?=$filmdesc['id']?>'"><span class="glyphicon glyphicon-ok"></span> <span id="list">Minha Lista</span></div>
                </div>
              
            </div>

            <img src="<?=$filmdesc['bg']?>" id="bg-img">
          </div>
      </div>
</div>
<? } ?>


<?php if($action == "serie"){


  ?>
 
<div class="play">
    <div class="header-img">
        <div class="bg-shadow" id="shadow"></div>
      
            </div>
            
            <div class="shadow-bg-linear">
              <div class="info-view">
                
                  <div class="title-view-div"><span class="title-view"><?=$serie_p['title']?></span></div>

                  <div id="content" >
    <p class="sinopse-view" >

<?=substr($serie_p['sinopse'], 0,255);?>
 </p>
                   <div class="mylist" onclick="window.location.href='functionPHP/addlist.php?t=1&id=<?=$serie_p['tag_ep']?>'"><span class="glyphicon glyphicon-ok"></span> <span id="list">Minha Lista</span></div>

              </div><!-- /content -->
                  <div class="episodio-div">
                  <div class="container itens">
                  <select id="selectBox" onchange="changeFunc(value);">
                    <option selected="selected" style="display: none;">Selecione a temporada</option>
                    <?php while($temp = mysql_fetch_assoc($temporada)){ ?>
                        <option value="<?=$temp['num']?>">Temporada <?=$temp['num']?></option>
                     <? } ?>
                  </select>
  <script type="text/javascript">

   function changeFunc($i) {
    $( ".t" ).removeClass( "active-t" );
    var t1 = ".t";
    var id = $i;
    var res = t1.concat(id);
    $( res ).addClass( "active-t" );
   }

  </script>
 

          <?php
          $titulo_link = str_replace(" ", "%20", $serie_p['title']);
?>
<?

           while($temp1 = mysql_fetch_assoc($temporada1)){   


            ?>


                    <div class="t<?=$temp1['num']?> t">  
                      Temporada <?=$temp1['num']?>
                        <div class="owl-carousel temporada">
                          <?php
                          $temp_n = $temp1['num'];
                          $ep = mysql_query("SELECT * FROM `series_ep` WHERE tag_ep='$tag' && temp='$temp_n'");
                          while ($episodio = mysql_fetch_assoc($ep)){
                            $bg_p = str_replace("w1280", "w227_and_h127_bestv2", $serie_p['bg']);

                            
                           ?>
                          <a href="play.php?tag=serie&id=<?=$episodio['id']?>"><img src="<?=$bg_p?>" alt="<?=$episodio['num_ep']?>" ><p class="temporadaepn"><?=$episodio['num_ep']?></p> </a>
                          <? } ?>
                      </div>
                  </div>
                 <? } ?>
                  </div>
                </div>
              
            </div>
            <ul id="menu">
            <?php 
            $eppp = mysql_query("SELECT * FROM `series_ep` WHERE tag_ep='$tag'");
            $esc_onclick = mysql_fetch_assoc($eppp);
            ?>
              <li class="btn-ep btn-geral active-btn" onclick="geral()" ><a class="geral">VISÃO GERAL</a></li>
                <select name="QtdAcomodacaoD" id="QtdAdomodacaoDuplo"  onchange="soma()">
 <option selected style="display:none;">Temporada</option>
<?php $tempo = mysql_query("SELECT * FROM `temp` WHERE tag='$tag'");
  while($temporada_f = mysql_fetch_assoc($tempo)){
       ?>
       <option value="<?=$temporada_f['num']?>"><?=$temporada_f['num']?>ª Temporada</option>
    <? }
       ?>
</select>
              
             
            </ul><!-- /menu -->

            
          </div>
          <img src="<?=$serie_p['bg']?>" id="bg-img">
      </div>
</div>
</div>

<? } ?>
<div class="container-ep">
    <div class="container">
   
        <div class="Eps">
        <br/> 
            <?php
            $tempor = mysql_query("SELECT * FROM `temp` WHERE tag='$tag'");
            while($temporada_r = mysql_fetch_assoc($tempor)){
            ?>
            <div style="display:none;" class="temp<?=$temporada_r['num']?> temp">
                <div class="temporadaSelect"></div>
                <?php 
                $temp_es = $temporada_r['num'];
                $episodio_ep = mysql_query("SELECT * FROM `series_ep` WHERE tag_ep='$tag' && temp='$temp_es' ");
                while($temp_escolh = mysql_fetch_assoc($episodio_ep)){
                    $img_bg = $temp_escolh['img'];
                    $img_bg = str_replace("w500","w150",$img_bg);
                    
                ?>
                    <div class="Epi">
                      <a href="play.php?tag=serie&id=<?=$temp_escolh['id']?>"> <img src="<?=$img_bg?>" height="90%"> 
                        <b><span class="title-epi"><?=$temp_escolh['num_ep'].".".$temp_escolh['titulo']?></span></b>
                        </a>
                    </div>
                <? } ?>
            </div>
            <? } ?>
            
            
        </div>
    </div>
</div>

<script>
    function soma(){
     var itemSelecionado = $("#QtdAdomodacaoDuplo option:selected");
       var select = itemSelecionado.val();
        $(".temp").removeClass("BlockD");
        $(".temp"+select).addClass("BlockD");
        $(".temporadaSelect").text(select+"ª Temporada");
        
        };
var height = $(".play").height()+73;
$(".container-ep").css('margin-top',height);

</script>
