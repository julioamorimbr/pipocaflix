<?php
$action = $_GET['action'];
if($action == "film"){
$tag = mysqli_real_escape_string($conn, $_GET['tag']);
$film = mysql_query("SELECT * FROM `filmes` WHERE id='$tag'");
$filmdesc = mysql_fetch_assoc($film);
}
$minhalista = mysql_query("SELECT * FROM `mylist` WHERE login='$loginM'");
$assistir = mysql_query("SELECT * FROM `mylist` WHERE login='$loginM'");
$qtd_assist = mysql_num_rows($assistir);
$qtd_lista = mysql_num_rows($minhalista);
$seriesdesc = mysql_query("SELECT * FROM `series` ORDER by id DESC");
$action = $_GET['action'];
if($action == "serie"){
$tag = mysqli_real_escape_string($conn, $_GET['tag']);
$serie_esc = mysql_query("SELECT * FROM `series` WHERE tag_ep='$tag' ");
$serie_p = mysql_fetch_assoc($serie_esc);

//temp
$temporada = mysql_query("SELECT * FROM `temp` WHERE tag='$tag' ");
$temporada1 = mysql_query("SELECT * FROM `temp` WHERE tag='$tag' ");


}
// Registrar-se
$register_1 = mysql_query("SELECT * FROM `pagamento` ORDER BY id DESC LIMIT 2,1 ") or die(mysql_error());
$registrar1= mysql_fetch_assoc($register_1 );
$register_2 = mysql_query("SELECT * FROM `pagamento` ORDER BY id DESC LIMIT 1,1 ") or die(mysql_error());
$registrar2= mysql_fetch_assoc($register_2);
$register_3 = mysql_query("SELECT * FROM `pagamento` ORDER BY id DESC LIMIT 0,1 ") or die(mysql_error());
$registrar3= mysql_fetch_assoc($register_3);

?>