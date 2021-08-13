
<link href="<?=base_url();?>assets/css/cssAdmin.css" rel="stylesheet">
<script src="js/jquery-3.1.1.js"></script>

    <div class="span7 scrollbar square scrollbar-lady-lips thin" id="tabelaDiv">   
<!-- <div class="widget stacked widget-table action-table"> -->
            

        <!-- <div class="widget-content"style="overflow: auto; width: 640px;height: 500px"> -->
          <table class='table table-striped table-bordered'>
            <thead>
              <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Pais</th>
                <th>Data de Inscrição</th>
                
             
                <th class='td-actions'> Ações</th>
              </tr>
            </thead>
            <tbody>
              
          <?php
           foreach ($projetos as $p) {
            
             echo "<tr>";
             echo "<td id=".$p->id.">".$p->id."</td>";
             echo "<td id=".$p->id.">".$p->titulo."</td>";
             echo "<td id=".$p->id.">".$p->pais."</td>";
             echo "<td id=".$p->id.">".$p->data."</td>";
             echo "<td class='td-actions'>";
             echo "<a href='".base_url()."admin/gerarPDF?id=".$p->id."' id=".$p->id."  class='btn btn-small'>";
             echo "<img class ='olho'src='".base_url()."assets/img/carta.png' >";
             echo "<a href='".base_url()."admin/infoPDF?id=".$p->id."' id=".$p->id."   class=' btn btn-small'>";
             echo "<img class ='olho'src='".base_url()."assets/img/olho.png' >";
             echo "</a>";
             echo "<a href='".base_url()."admin/excluirProjeto?id=".$p->id."' onclick='return confirm(\"Tem certeza que deseja deletar este registro?\")'id=".$p->id." class='btn btn-small'>";
             echo "<i class='btn-icon-only icon-remove'></i>";
             echo "</a>";
             echo "<input type='checkbox' id=".$p->id." class='ch' onchange='teste(".$p->id.")' >";
        
             echo "</td>";
             echo "</tr>";
           }
           ?>
           </tbody>
        </table>
    </div>
<script type="text/javascript">
       function teste(id){
           
                 if( $(".ch").is(':checked') ){
                  if($(".ch").attr('id')=="253"){
                      alert('Field is checked - language:english  '+id); 
                  }
          
            // alert('Campo esta selecionado - language:pt-br'); 
      } 

                
             
                      // alert('Field anguage:english '+ id);
                  
                    //alert("ola");
                //     var cstatus = $('#status').val();
                //     var csenha  = $('#senha').val();
                //     $.ajax({
                //             type:'POST',
                //             data:{status: cstatus},
                //             url:'<? echo base_url('admin/enviado'); ?>',
                //             success: function(msg){
                //                 alert(msg);
                //                 }
                //         });
                    
                // });


        };     
</script>




