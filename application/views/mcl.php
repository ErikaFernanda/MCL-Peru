<?php 
 ?>


<!DOCTYPE html>
<html lang="en" style="
    overflow-x: hidden;
">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    window.onload = function() {
    var recaptcha = document.forms["Form1"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    
    alert("Por favor realize a verificação !!");
      }
   }
   
   function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ES'}, 'google_translate_element');
}
</script>
    

  

  <title>MCL</title>
<?php
    $mensagem = $this->session->flashdata('mensagem');    
    if (isset($mensagem) && $mensagem!=''){
        echo "<script>alert('".$mensagem."')</script>";
    }
?>
  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="<?=base_url();?>assets/css/creative.min.css" rel="stylesheet">
  
  <link rel="icon" type="imagem/png" href="<?=base_url();?>assets/img/favicon.jpg" />
  
  <script src="https://www.google.com/recaptcha/api.js"></script>


</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img id="logo" src="<?=base_url();?>assets/img/logoferia.png" ></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"style="font-size: 14px;word-spacing: 4px;" href="#about">LA MCL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="font-size: 14px;word-spacing: 4px;;"href="#services">REGLAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"style="font-size: 14px;word-spacing: 4px;" href="#locate">LOCAL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="font-size: 14px;word-spacing: 4px;"href="#portfolio">EDICIONES ANTERIORES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"style="font-size: 14px;word-spacing: 4px;" href="#filiais">ACREDITACIONES</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" style="font-size: 14px;word-spacing: 4px;"href="#inscricao">INSCRIPCIÓN</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"style="font-size: 14px;word-spacing: 4px;" href="#programacao">PROGRAMACIÓN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger"style="font-size: 14px;word-spacing: 4px;" href="#contact">CONTACTO</a>
          </li>
          <div id="google_translate_element"></div>

          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <section id="about">
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <?php
            foreach ($painel as $p) {
              $texto1=$p->texto1;
          $texto2=$p->texto2;
          $a1=$p->a1;
          $a2=$p->a2;
          $a3=$p->a3;
          $a4=$p->a4;
          $b1=$p->b1;
          $b2=$p->b2;
          $b3=$p->b3;
          $b4=$p->b4;
              
            }

          echo"<h1 class='text-uppercase text-white font-weight-bold'>".$texto1."</h1>";
          echo'<hr class="divider my-4">;
          </div>
          <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">'.$texto2.'</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger"style="width: 180px;" href="#inscricao">INSCRIPCIÓN</a>
          <a class="btn btn-primary btn-xl js-scroll-trigger" style="width:180px;" href="/assets/XIII_MUESTRA_CIENTIFICA_LATINOAMERICANA.docx">BASES</a>
          </div>
          
          
          
      </div>
    </div>
  </header>
  </section>
  <section class="page-section bg-primary" id="services">
    <div class="container">
      <h2 class="text-center mt-0 text-white mt-0">Reglas de participación</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-gem text-primary mb-4"></i> -->
            <div class="mt-5 div-number">
            <h3 class="h4 mb-2 text-white mt-0 number" >1º</h3>
            </div>
            <p class="text-white mb-0">'.$b1.' </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i> -->
            <div class="mt-5 div-number">
            <h3 class="h4 mb-2 text-white mt-0 number" >2º</h3>
            </div>
            <p class="text-white mb-0">'.$b2.'</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-globe text-primary mb-4"></i> -->
            <div class="mt-5 div-number">
            <h3 class="h4 mb-2 text-white mt-0 number" >3º</h3>
            </div>
            <p class="text-white mb-0">'.$b3.'</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <!-- <i class="fas fa-4x fa-heart text-primary mb-4"></i> -->
            <div class="mt-5 div-number">
            <h3 class="h4 mb-2 text-white mt-0 number" >4º</h3>
            </div>
            <p class=" text-white mt-0">'.$b4.'</p>
            <a href="/assets/XIII_MUESTRA_CIENTIFICA_LATINOAMERICANA.docx" >VEA LAS REGLAS PARA PARTICIPAR</a>
            
          </div>
        </div>
      </div>
    </div>
  </section>'

          ?> 
          
          
        

  <!-- About Section -->

  <!-- Services Section -->
  

  <section class="page-section" id="locate">
    <div class="container">
        
        <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">MCL - ONLINE </h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">La exposición virtual de los proyectos es ante un jurado evaluador durante los días 05, 06, 07 y 08 de octubre.

El día 09 de octubre será la clausura del evento</p>
        </div>
      </div>
        
      <!--<div class="row justify-content-center">-->
      <!--  <div class="col-lg-8 text-center">-->
      <!--    <h2 class="mt-0">Trujillo - Otuzco </h2>-->
      <!--    <hr class="divider my-4">-->
      <!--    <p class="text-muted mb-5">Entre os dias 09/09 e 11/09 o evento será realizado em Trujillo, já do dia 11/09 á 14/09 será realizado na cidade Otuzco.</p>-->
      <!--  </div>-->
      <!--</div>-->
      <!--<div class="row">-->
      <!--  <div class="col-lg-4 ml-auto text-center">-->
      <!--    <img id="lugares" src="<?=base_url();?>assets/img/trujillo.jpg" >-->
      <!--    <h4 class="mt-0">Trujillo</h4>-->
      <!--    <a href="#"> Endereço : Jirón Bolivar 753, Trujillo 13001, Peru </a>-->
      <!--  </div>-->

       

      <!--  <div class="col-lg-4 mr-auto text-center">-->
      <!--    <img id="lugares" src="<?=base_url();?>assets/img/Otuzco.jpg" >-->
      <!--    <h4 class="mt-0">Otuzco</h4>-->
      <!--    <a href="#"> Endereço : Otuzco 13201, Peru </a>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
  </section>



  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
        <h2 class="text-center mt-0">EDICIONES ANTERIORES</h2>
        <hr class="divider my-4">
        <br>
        
      <div class="row no-gutters">
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg">
            <img class="img-fluid "src="assets/img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/7.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/7.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/8.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/8.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
        <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/9.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/9.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>


         <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/10.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/10.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>

         <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/11.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/11.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
         <div class="col-lg-2 col-sm-2">
          <a class="portfolio-box" href="assets/img/portfolio/fullsize/12.jpg">
            <img class="img-fluid" src="assets/img/portfolio/thumbnails/12.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
               <img id="lugares" style='width: 42px;height: 42px;'src="<?=base_url();?>assets/img/lupa.png" >
              </div>
<!--               <div class="project-name">
                
              </div> -->
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
   <section class="page-section" id="filiais">
 <center>
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">ACREDITACIONES</h2>
          <hr class="divider my-4">
          <table  style="
    margin: auto;
    border-collapse: collapse; /* CSS2 */
    background: #f8e79a;
    border: solid #efdfaf 3px;
">
<tr style="background: white;">
<th>N° DE ACREDITACIONES</th>
<th>FERIA O EVENTO</th> 
<th>PAÍS</th>
</tr>
<td>2</td>
<td>GENIUS OLYMPIAD</td>
<td>USA – Nueva York</td>
</tr>
<tr>
<td>1</td>
<td>MAGMA</td>
<td>España – Barcelona</td>
</tr>
<tr>
<td>2</td>
<td>SOLACYT INFOMATRIX</td>
<td>México - Guadalajara</td>
</tr>
<tr>
<td>2</td>
<td>CAMPAMENTO CIENTÍFICO</td>
<td>Argentina – Entre Ríos, Cerrito</td>
</tr>
<tr>
<td>3</td>
<td>ENCUENTRO CIENTÍFICO</td>
<td>Colombia – Valledupar</td>
</tr>
<tr>
<td>2</td>
<td>MICITEC</td>
<td>Paraguay - Capiatá</td>
<tr>
</tr>
<td>2</td>
<td>COPA TECNOCIENCIAS</td>
<td>Paraguay -Asunción</td>
</tr>
<tr>
<td>2</td>
<td>FECIFRON</td>
<td>Brasil – (IFMS)</td>
</tr>
<tr>
<td>2</td>
<td>MOCINN - MCTEA</td>
<td>Brasil – Belém</td>
</tr>
<tr>
<td>2</td>
<td>FEMUCI</td>
<td>Brasil – Esteio - Rio Grande do Sul</td>
</tr>
<tr>
<td>2</td>
<td>FECON</td>
<td>Brasil – Recife</td>
</tr>
<tr>
<td>2</td>
<td>FEBRATEC</td>
<td>Brasil – Brasilia DF</td>
</tr>
<tr>
<td>2</td>
<td>MILSET NACIONAL</td>
<td>Brasil</td>
</tr>
<tr>
<td>2</td>
<td>MOSTRATEC</td>
<td>Brasil</td>
</tr>
<tr>
<td>2</td>
<td>FEBRACE</td>
<td>Brasil – São Paulo</td>
</tr>
<tr>
<td>2</td>
<td>FeNaDANTE</td>
<td>Brasil – São Paulo</td>
</tr>
</table>
        </div>
      </div>
 </center>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="inscricao">
      
    <div class="container pt-5 pb-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center mt-0">INSCRIPCIÓN</h2>
              <hr class="divider my-4">
              <a href="<?=base_url();?>assets/XIII_MUESTRA_CIENTIFICA_LATINOAMERICANA.docx" >VEA LAS REGLAS PARA PARTICIPAR</a>
              <!-- <form method ="POST" action ="salvarInscricao.php">  -->
              
              
  
              
              
                <form id="Form1" method ="POST" action ="<?=base_url();?>MCL/salvarProjeto"> 
                <h4 class="text-left">Datos de los participantes</h4>
                <br>
                <span style="display:none;visibility:hidden;">  
                    <label for="spanteste">
                          Ignore este campo de texto
                    </label>  
                    <input type="text" name="spanteste" size="1" value="" />
                </span>
                
                
                <h6 class="text-left">Assesor</h6>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name= "nome3" placeholder="Nombre" >
                    </div>
                    <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="inputDado" name = "email3" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="cpf" class="form-control" id="inputDado" name="cpf3" placeholder="Documento de identificación nacional">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="age" class="form-control" id="inputDado" name= "idade3" placeholder="Edad" >
                    </div>
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name="telefone3" placeholder="Nº de Whatsapp">
                    </div>
                    <span style="display:none;visibility:hidden;">  
                     
                        <input type="text" name="tipoparticipante3" size="1" value="2" />
                    </span>
                
                  
                    
              
                    
                  </div>
                
                <h6 class="text-left">Expositor 1</h6>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name= "nome1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="inputDado" name = "email1" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="cpf" class="form-control" id="inputDado" name="cpf1" placeholder="Documento de identificación nacional">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="age" class="form-control" id="inputDado" name= "idade1" placeholder="Edad" required>
                    </div>
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name="telefone1" placeholder="Nº de Whatsapp">
                    </div>
                
                  <span style="display:none;visibility:hidden;">  
                     
                        <input type="text" name="tipoparticipante1" size="1" value="1" />
                    </span>
                    
              
                    
                  </div>
                  <br>
                  
                  <h6 class="text-left">Expositor 2</h6>

                  
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name= "nome2" placeholder="Nombre">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="email" class="form-control" id="inputDado" name = "email2" placeholder="Correo electrónico">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="cpf" class="form-control" id="inputDado" name="cpf2" placeholder="Documento de identificación nacional">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="age" class="form-control" id="inputDado" name= "idade2" placeholder="Edad">
                    </div>
                    <div class="form-group col-md-4">
                      <input type="name" class="form-control" id="inputDado" name="telefone2" placeholder="Nº de Whatsapp">
                      <span style="display:none;visibility:hidden;">  
                     
                        <input type="text" name="tipoparticipante2" size="1" value="1" />
                    </span>
                    </div>

                  
                   
                  </div>
                  <br>
                  <hr>
                  <br>
                  <h4 class="text-left">Datos del proyecto</h4>
                  <br>
                   <div class="form-row">
                  <div class="form-group col-md-4">
                   
                    <h6 class="text-left">Nombre del Proyecto</h6>
                    <input type="text" name="titulo" class="form-control" id="inputAddress" required placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                    <h6 class="text-left">Área del Proyecto</h6>
                    <input type="text" name="area" class="form-control" id="inputArea" required placeholder="">
                  </div>
                  <div class="form-group col-md-4">
                    <h6 class="text-left">Link de los videos</h6>
                    <input type="text" name="links" class="form-control" id="inputVideos" placeholder="">
                  </div>
               
                    <div class="form-group col-md-4">
                      <h6 class="text-left"> Nombre de la Institución que representa</h6>
                      <input type="country" name="escola" class="form-control" id="inputDado" placeholder="">
                    </div>
            
                    <div class="form-group col-md-4">
                      <h6 class="text-left">País</h6>
                      <input type="country" name="pais" class="form-control" id="inputDado"required placeholder="">
                      
                   </div>
                   <div class="form-group col-md-4">
                      <h6 class="text-left">Región / Estado</h6>
                      <input type="country" name="estado" class="form-control" id="inputDado"  placeholder="">
                  </div>
                  
                    
                  </div>
                  <div class="g-recaptcha" data-sitekey="6Lea5bQUAAAAANgY9adSGJCgdGDF08ydFd7Dz40x" data-callback="recaptchaCallback" data-expired-callback="recaptchaExpired"></div>
                  <button id="btnSubmit" type="submit" class="btn btn-primary">Acabar inscripción</button>
                 
                  </div>
                  
                  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  

  </section>
  
  
  <section class="page-section" id="programacao">
 <center>
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">PROGRAMACIÓN</h2>
          <hr class="divider my-4">
          <img class="img-fluid" style="height: 100%;" src="<?=base_url();?>assets/img/programacao.png" >
        </div>
      </div>
 </center>
  </section>
  
  
  


  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contacto</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Cualquier duda por favor contáctenos.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div> Teléfono: +51 971 099 185</div>
        </div>


        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:victorcabrera@santarita.edu.pe">victorcabrera@santarita.edu.pe</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Start Bootstrap | Erika Fernanda - erikasolivee@gmail.com</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="assets/js/creative.min.js"></script>

</body>


</html>
