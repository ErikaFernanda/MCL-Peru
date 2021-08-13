<?php 

$expositor=array();
$responsaveis=array();
$idclick = $_GET['id'];
// $data = date("d/m/Y");
$encoding = mb_internal_encoding();


setlocale(LC_TIME, 'es_PE', 'es_PE.utf-8', 'es_PE.utf-8',"spanish");
date_default_timezone_set('America/Sao_Paulo');
$data = strftime('%d de %B de %Y', strtotime('today'));

foreach ($projetos as $p) {
	if($p->projeto_id_fk==$idclick){
		$projeto=$p->titulo;
		$diretor=$p->diretor;
		$escola=$p->escola;
		$pais=$p->pais;
		$estado=$p->estado;
// 		$data =$p->data;
		if($p->nome!=""&& $p->tipoparticipante=="1"){
		$expositor[]=$p->nome;
			
		}
		if($p->nome!=""&& $p->tipoparticipante=="2"){
			$responsaveis[]=$p->nome;

		}
		
		
		
	}
	
}

$orientadores = implode(" e ", $responsaveis);
$participantes = implode(", ", $expositor);

// ----------



use Dompdf\Dompdf;
require_once ("pdf/autoload.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html('


<center><img id="logo" src="assets/img/logoferia.png"></center>

<div class="txtzinho">
Trujillo, '.$data.'
</div>
<div class="diretor" style="margin-bottom:0px">Diretor: <b>'.strtoupper($diretor).';<br>
</div> 
<div class="texto indent nomes">
	'.mb_strtoupper($escola).';<br>
</div>
<div class="texto indent nomes">
	'.mb_strtoupper($pais).', '.mb_strtoupper($estado).'.</b>
</div>

<div class="texto indent">
	Nos es grato dirigirnos a usted para comunicarle que la Municipalidad del Distrito de El Porvenir, Provincia de Trujillo, Región La Libertad, Perú en convenio con la Asociación Educativa Santa Rita, este año organizan la 12a Muestra Científica Latinoamericana.

</div>

<div class="texto indent">
Evento que se llevará a cabo del 9 al 15 de Setiembre en el Centro Cultural Municipal de El Porvenir sito en la cuadra 16 de la Avenida Pumacahua del mismo distrito, con la participación de jóvenes científicos del Perú y países hermanos como Argentina, Brasil, Ecuador, Colombia y México.
</div>

<div class="texto indent">
A través del presente reciba usted Acreditación Oficial mediante invitación directa a indicación del Comité Científico por méritos de autoría y premios en ferias de ciencias asociadas, para el proyecto:
</div>

<div class="texto">
PROYECTO: <b>'.mb_strtoupper($projeto).';</b><br>
INVESTIGADOR(ES):<b> '.mb_strtoupper($participantes).';</b><br>
ORIENTADOR(ES)/ACOMPAÑANTE(ES):<b>'.mb_strtoupper($orientadores).';</b><br>
</div>
<div class="texto indent">
Toda la información sobre nuestro evento, costos de inscripción, hospedaje y alimentación se encuentra disponible en el  blog:  <a href ="#"">http://muestracl.blogspot.com/.</a>
</div>
<div class="texto indent">
	Atentamente;
</div>


<center><img id="assinatura" src="assets/img/assinatura2.png" ></center>

<style type="text/css">
#assinatura{
margin-top:-10px;

}
.diretor{
	width:500px;
	display:block;
	margin-top:120px;
	margin-left:60px;
	margin-bottom:10px;
}

.txtzinho{
	float:right;
	margin-right:60px;
	display:block;
	padding-top:60px;
}

#divtitulo{
	margin:auto;
	display:block;
}
#titulo{
	text-align:center;
	color:red;
}
#logo{
	width:150px;
}
.texto{
	width:600px;
	margin:auto;
	padding-top:20px;
	display:block;
	text-align:justify;
}
.indent{
		text-indent:50px;
}
.nomes{
	margin-top:-15;
}
</style>
');
$dompdf->render();
$dompdf->stream("Projeto_".$idclick.".pdf",
array("Attachment"=>false)
);
?>


