@extends('layouts.app')

@section('htmlheader_title')

  Mapa de todos los prospectos
@stop

@section('main-content')
<body>
    

    
<div class="row docs-premium-template">
  <div class="col-md-6">
    <div class="box box-primary col-xs-6">                
        <div class="box-header">
         
                  <div class="callout callout-info">
                    <h3 class="box-title">Sección para activar nueva garantía de por vida</h3>
                    <i class="ion ion-person-add"></i>
<style>
                    .ion {
    -webkit-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    position: absolute;
    top: 18px;
    right: 30px;
    z-index: 0;
    font-size: 90px;
    color: rgba(0,0,0,0.15);
}
</style>
                       <div  style="
                                margin: auto;
                                box-shadow: none;
                                color: #76A82B;
                                font-weight: 600;
                                padding:6px;
                                margin-top: 20px;
                                border-radius:6px;
                                border:1px solid #76A82B;                                
                                background:#fff;
                                ">                   
                      </div>
                      

                  </div>
                </div><!-- /.box-header -->

                <div id="notificacion_resul_fanu"></div>
        <form  id="f_nueva_finca_agricultor"  method="post"  action="{{ url('/agregar_nueva_garantia') }}" class="">
          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                    

                        <div class="form-group">
                                                <label for="usuario">Tu nombre*</label>
                                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Tu nombre" required>
                        </div>

                        <div class="form-group">
                                                <label for="nombre">Tu email*</label>
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Tu email" required>
                        </div>

                        <div class="form-group">
                                <label for="pais">Departamento</label>
                                              <select name="departamento" class="form-control" id="departamento" required >
                                               <option>Selecciona un departamento</option>
                                        <?php  for($i=0;$i<=count($departamentos)-1;$i++){  if($departamentos[$i]->id !=$i){ ?>

                                              <option value="<?= $departamentos[$i]->id  ?>" ><?= $departamentos[$i]->departamento ?></option>
                                              <?php   }} ?>
                                              </select>                   
                        </div>
                        <div class="form-group">
                                <label for="ciudad">Ciudad</label>
                                              <select name="ciudad" class="form-control" id="ciudad" required >
                                               <option> Ciudad </option>
                                               <option value="">Selecciona:</option>
                                              </select>                     
                        </div>

                        <div class="form-group">
                        <label for="ref_color">Referencia color</label>
                        <select name="ref_color" class="form-control" id="ref_color" required>>
                          <option value="GZ-50 Negro">GZ-50 Negro</option>
                          <option value="GZ-50 Púrpura" selected>GZ-50 Púrpura</option>
                          <option value="GZ-50 Rosado">GZ-50 Rosado</option>
                          <option value="GZ-50 Royal">GZ-50 Royal</option>
                          <option value="GZ-50 Navy">GZ-50 Navy</option>
                        </select>
                      </div>

                        <div class="form-group">
                                <label for="codigo">Codigo</label>
                                              <select name="codigo" class="form-control" id="codigo" required>
                                               
                                        <?php  for($i=0;$i<=count($codigos)-1;$i++){  if($codigos[$i]->id !=$i){ ?>

                                              <option value="<?= $codigos[$i]->id  ?>" ><?= $codigos[$i]->numero ?></option>
                                              <?php   }} ?>
                                              </select>                   
                        </div>

                       


                       
                        
                                                        
   
                 <div class="form-group ">
                    <button type="submit" class="nbtn-two">Activar Garantía</button>
                  </div>
                </div>
              </div>        
        </form>

          

          </div>   



      </div>

</body>

@endsection


    

@section('scripts')
    

<script>
$(document).ready(function() {
$("#departamento").change(function(event){
$.get("departamentos/"+event.target.value+"",function(response,state) {
$("#ciudad").empty();
$("#ciudad").append("<option value=''>Selecciona una ciudad</option>");
for(i=0; i<response.length; i++) {
$("#ciudad").append("<option value='"+response[i].id+"'>"+response[i].ciudad+"</option>");
                                   }
                                                                 });
                               });
                               });
</script>


<style>
.nbtn-two {
    background: #3224af;
    border-radius: 6px;
    -webkit-box-shadow: none;
    box-shadow: none;
    color: #fff;
    font-weight: 600;
    font-size: 20px;
    padding: 9px 28px;
    border: 1px solid transparent;
    
}
</style>


@endsection







    



