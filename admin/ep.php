<?php
$jsonc = file_get_contents("https://api.themoviedb.org/3/search/tv?query=todo%20o%20mundo%20odeia%20o%20chris&api_key=b5ad6a9f75ea4e476b5f08b524ddf83d");
$epjson = json_decode($jsonc);

$serie_id = $epjson->results[0]->id;



$ep = "1";
$serie = $serie_id;
$temporada = "1";
$token = "b5ad6a9f75ea4e476b5f08b524ddf83d";
$url = "https://api.themoviedb.org/3/tv/".$serie."/season/".$temporada."/episode/".$ep."?api_key=".$token."&language=pt-BR";
$exec = file_get_contents($url);
$json = json_decode($exec);
$poster = $json->still_path;

echo $poster;
?>
