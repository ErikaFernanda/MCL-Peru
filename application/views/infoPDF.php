<?php 

$expositornome=array();
$expositoremail=array();
$expositoridade=array();
$expositortelefone=array();
$expositorcpf=array();
$expositorcamisa=array();
$expositortipo=array();
$expositorgenero=array();
$idclick = $_GET['id'];


foreach ($projetos as $p) {
	if($p->projeto_id_fk==$idclick){
		$projeto=$p->titulo;
		$pais=$p->pais;
		$estado=$p->estado;
		$area=$p->area;
		$links=$p->links;
		$objetivo=$p->objetivo;
		$resultados=$p->resultados;
		$data=$p->data;
        $diretor=$p->diretor;
        $escola=$p->escola;



	   if($p->nome!=""){
	       if($p->tipoparticipante==1){
	           $p->tipoparticipante = "Expositor";
	       }else{
	            $p->tipoparticipante  = "Assesor";
	       }
	       
    		$expositornome[]=$p->nome;
    		$expositoremail[]=$p->email;
    		$expositoridade[]=$p->idade;
    		$expositortelefone[]=$p->telefone;
    		$expositorcpf[]=$p->cpf;
    		$expositortipo[]=$p->tipoparticipante;
        }
	}
	
}
for ($i=0; $i <7; $i++) { 
    
    if(!isset($expositornome[$i])){
        $expositornome[$i]=" ";
        $expositoremail[$i]=" ";
        $expositoridade[$i]=" ";
        $expositortelefone[$i]=" ";
        $expositorcpf[$i]=" ";
        $expositorcamisa[$i]=" ";
        $expositortipo[$i]=" ";
        $expositorgenero[$i]=" ";
    }
    
}

$participantes = implode(", ", $expositornome);
$participantesemail = implode(", ", $expositoremail);
$participantesidade = implode(", ", $expositoridade);
$participantestelefone = implode(", ", $expositortelefone);

// ----------



use Dompdf\Dompdf;
require_once ("pdf/autoload.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html('
	    <h1>Datos del proyecto</h1>
	    <p>Nombre del proyecto: '.$projeto.'</p>
		<p>País: '.$pais.'/'.$estado.'</p>
        <p>Nombre de la Institución que representa: '.$escola.'</p>
        <p>Área del Proyecto:'.$area.'</p>      
        <p>Link de los videos:'.$links.'</p>
		<hr>
		
		<h3>Participantes</h3>

<table border="1">
	<tr>
        <th>Nombre</th>
        <th>Correo electrónico</th>
        <th>Edad</th>
        <th>Nº de Whatsapp</th>
        <th>DNI</th>
        <th>Tipo</th>
              
    </tr>
    <tr>
    <td>'.$expositornome[0].'</td>
    <td>'.$expositoremail[0].'</td>
    <td>'.$expositoridade[0].'</td>
    <td>'.$expositortelefone[0].'</td>
    <td>'.$expositorcpf[0].'</td>
   
    <td>'.$expositortipo[0].'</td>

    </tr>
    <tr>
    <td>'.$expositornome[1].'</td>
    <td>'.$expositoremail[1].'</td>
    <td>'.$expositoridade[1].'</td>
    <td>'.$expositortelefone[1].'</td>
    <td>'.$expositorcpf[1].'</td>
    <td>'.$expositortipo[1].'</td>
    </tr>
    <tr>
    <td>'.$expositornome[2].'</td>
    <td>'.$expositoremail[2].'</td>
    <td>'.$expositoridade[2].'</td>
    <td>'.$expositortelefone[2].'</td>
    <td>'.$expositorcpf[2].'</td>
    <td>'.$expositortipo[2].'</td>
    </tr>
   
 
   
</table>

<style type="text/css">

.txtSize{
	font-size:12px;
}

</style>

');
$dompdf->render();
$dompdf->stream("Proyecto_".$p->projeto_id_fk.".pdf",
array("Attachment"=>false)
);
?>


