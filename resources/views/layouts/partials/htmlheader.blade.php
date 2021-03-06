<head>
       
    
    
    <title>Sistema | Panel Control</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   
   

   
       <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120906226-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-120906226-1');
    </script>
        <meta name="description" content="La primera plataforma de visitas técnicas que centraliza y automatiza completamente tu gestión">
    <meta name="keywords" content="Agronielsen, Agro nielsen, agronielsen en campo, visitas, agrícola, integración, automatización,mercado agrícola,visitas técnicas,gestor de visitas técnicas, fertilizantes foliares, fertilizantes, foliares,abonos">
    <link rel="author" href="https://www.agronielsen.com/encampo" />
    <link rel="canonical" href="https://www.agronielsen.com/encampo"/>
    <!-- FB Meta tags -->
    <meta property="og:title" content="Agronielsen en Campo: Gestor de visitas técnicas"/>
    <meta property="og:type" content="website"/>
    <meta property="og:image" content="{{url('css/appx/media/banner/encampoapp.png')}}"/>
    <meta property="og:url" content="https://www.agronielsen.com/encampo"/>
    <title>Agronielsen en Campo: Gestor de visitas técnicas</title>
      <link rel="apple-touch-icon" sizes="180x180" href="{{url('css/appx/assets/img/favicon/agronielsen-apple-touch-icon.png')}}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{url('css/appx/assets/img/favicon/faviconnielsen.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{url('css/appx/assets/img/favicon/faviconnielsen-16-16.png')}}">
  <!--<link rel="manifest" href="/site.webmanifest">-->
  <link rel="mask-icon" href="{{url('css/appx/assets/img/favicon/safari-pinned-tab.svg')}}" color="#454be5">
  <meta name="msapplication-TileColor" content="#454be5">
  <meta charset="utf-8">
   
    <!-- Bootstrap 3.3.5 -->
  <!--  <link rel="stylesheet" href="http://www.aplicatics.co/cosmoagro/public/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.min.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tour/0.11.0/css/bootstrap-tour.css" rel="stylesheet"/>
   
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{url('css/pe-icon-7-stroke.css')}}">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{url('/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{url('/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{url('/plugins/datepicker/datepicker3.css')}}"> <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="{{url('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <link rel="stylesheet" href="{{url('/plugins/fullcalendar/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{url('/plugins/fullcalendar/fullcalendar.min.css')}}" />
        <link rel="stylesheet" href="{{url('/plugins/timepicker/bootstrap-timepicker.css')}}" />
    <link rel="stylesheet" href="{{url('/plugins/timepicker/bootstrap-timepicker.min.css')}}" />

      
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="{{url('/css/sistemalaravel.css')}}">

   <!-- <link rel="stylesheet" href="http://www.aplicatics.co/empresas/public/dist/css/AdminLTE.min.css"> -->

    <link rel="stylesheet" href="{{url('dist/css/AdminLTE.min.css')}}">

    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css"/>


    
</head>

      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>
         

         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="{{url('imagenes/cargando.gif')}}" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>


                 <?php 
                     
           if($usuario->tipoUsuario==1) { ?>

      <!--     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin.php'); }
      //     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin_evento.php'); }   
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard.php'); }
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard_evento.php'); }      
       -->
         <section> 
                     <div id="capa_modal" class="div_modal" ></div>
                     <div id="capa_para_edicion" class="div_contenido" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion" ></div>


     

                 
        </section>

          <section> 
                     <div id="capa_modal_evento" class="div_modal_evento" ></div>
                     <div id="capa_para_edicion_evento" class="div_contenido_evento" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button> -->
                            <!--      <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>-->
                            <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>-->
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion_evento" ></div>


</section>

<?php }?>


                 <?php 
                     
           if($usuario->tipoUsuario==2) { ?>

      <!--     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin.php'); }
      //     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin_evento.php'); }   
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard.php'); }
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard_evento.php'); }      
       -->
         <section> 
                     <div id="capa_modal" class="div_modal" ></div>
                     <div id="capa_para_edicion" class="div_contenido" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion" ></div>


     

                 
        </section>

          <section> 
                     <div id="capa_modal_evento" class="div_modal_evento" ></div>
                     <div id="capa_para_edicion_evento" class="div_contenido_evento" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button> -->
                            <!--      <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>-->
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion_evento" ></div>


</section>

<?php }?>


                 <?php 
                     
           if($usuario->tipoUsuario==3) { ?>

      <!--     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin.php'); }
      //     if($usuario->tipoUsuario==1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_admin_evento.php'); }   
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard.php'); }
      //     if($usuario->tipoUsuario!=1){ include('/home/adminaplicatics/public_html/empresas/resources/views/menus/submenu_standard_evento.php'); }      
       -->
         <section> 
                     <div id="capa_modal" class="div_modal" ></div>
                     <div id="capa_para_edicion" class="div_contenido" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion" ></div>


     

                 
        </section>

          <section> 
                     <div id="capa_modal_evento" class="div_modal_evento" ></div>
                     <div id="capa_para_edicion_evento" class="div_contenido_evento" >
                     
                      <input type="hidden" id="usuario_seleccionado" value="0"  />
                      <input type="hidden" id="seccion_seleccionada" value="0"  />

                      <div class="margin"  id="botones_control" >
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(1);" >Informacion</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(2);" >Educación</button> -->
                            <!--      <button type="button" class="btn btn-primary" onclick="mostrarseccion(3);" >Carga Documentos</button>
                                  <button type="button" class="btn btn-primary" onclick="mostrarseccion(5);" >Seguimiento</button>-->
                                  <!--<button type="button" class="btn btn-primary" onclick="mostrarseccion(4);" >Proyectos</button> --> 
                                 
                      </div>
                    

                      <div  id="contenido_capa_edicion_evento" ></div>


</section>

<?php }?>

        <div style="display: none;" id="cargador_empresa" align="center">
            <br>
         

         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="imagenes/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>
       
       <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Módulo Técnico para Cultivos de Aguacate</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
            <div class="text-center">
              
              
                <iframe width="560" height="360" src="https://www.youtube.com/embed/g1l9FD83gi0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

        <!--Footer-->
        <div class="modal-footer justify-content-center">
            <a href="{{asset('form_nueva_finca_aguacate')}}" target="_blank" type="button" class="btn btn-primary">Ver módulo <i class="fa fa-diamond ml-1 text-white"></i></a>
            <a type="button" class="btn btn-primary" data-dismiss="modal">Ahora no</a>
        </div>
    </div>
    <!--/.Content-->
</div>
</div>
<!-- Central Modal Medium Info-->