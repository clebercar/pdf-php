<?php

require __DIR__.'/vendor/autoload.php';

$dompdf = new Dompdf\Dompdf();

$tabela = file_get_contents('tabela.html');

$dompdf->loadhtml($tabela);
$dompdf->setPaper('A4', 'portrait'); /*Tamanho da página e a orientação*/ 
$dompdf->render(); /* renderiza o pdf*/

$dompdf->stream(); /* oferece para o navegador*/

/*Salva o arquivo na raiz do diretório*/
file_put_contents('doc.pdf', $dompdf->output());