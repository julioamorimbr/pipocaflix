<?php

/*Função fopen usada para abrir arquivo, ou seja, joga-lo na memória do servidor, neste caso o arquivo ainda não existe.
o “w” quer dizer write, que o arquivo pode ser escrito */

$arquivo = fopen(“arquivo.txt”, “w”);

$texto = “Olá Mundo!!!”;

/*a função fwrite escreve o valor da variável $texto no arquivo.txt se o arquivo não existe o php cria o arquivo*/
fwrite($arquivo, $texto);

/*a função fclose retira o arquivo.txt da memória o servidor*/
fclose($arquivo);

?>