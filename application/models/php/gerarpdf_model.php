<?php 

class Gerarpdf_model extends CI_Model{

$nameCliente = utf8_encode($_POST['nomeAluno']);
$cpfCliente = utf8_encode($_POST['cpfAluno']);
$emailCliente = utf8_encode($_POST['cursoAluno']); 

// PEGA O ARQUIVO MODELO 

$pdf = file_get_contents("../modelo.html");

// SUBSTITUI COM OS DADOS FORNECIDOS

$pdf = str_replace("#nomeAluno","$nomeAluno",$pdf);
$pdf = str_replace("#cpfAluno","$cpfAluno",$pdf);
$pdf = str_replace("#cursoAluno","$cursoAluno",$pdf); 

// SOLICITA A CLASS MPDF 

require_once("mpdf/mpdf.php");

// INSTANCIA A CLASS MPDF

$mpdf = new mPDF(); 

// ESCREVE O PDF 

$mpdf->WriteHTML($pdf);

// SAIDA DO PDF NO NAVEGADOR

$mpdf->Output("Relatório - ".$nome.".pdf","D");

// SE QUISER SALVAR É SÓ DIRECIONAR O DIRETORIO

//$arquivo_contrato = $mpdf->Output("../requerimentos/".$nome.".pdf");
}
}