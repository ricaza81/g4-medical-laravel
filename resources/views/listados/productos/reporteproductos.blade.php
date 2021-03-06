
@extends('layouts.app')
@section('htmlheader_title')
  Home
@endsection
@section('main-content') 
                            <?php
                           if ($msj==!"") { ?>
                                     <div ><label style='background-color: #E9FCFA;
                          border: 1px dashed #006600;
                          padding: 8px;
                          margin-bottom: 10px; font-family: Arial; font-size:12px; width:100%'><?php  echo $msj; ?>  </label>  </div>
                          <?php } ?>
              <div class="row"> 
                     <div class="col-md-8">
                                <div class="box box-primary col-xs-8"><br/>
                                   <div class="callout callout-info"><h3 class="box-title">Tu Portafolio de Productos:  Tienes <?=count($productos);?> Producto(s) creado(s)</h3>
                                   <a href="{{asset('formnuevoproductoempresa')}}"> Crear Nuevo Producto
                                   </a>
                                   </div>
                                      <table id="lista_productos" class="display responsive" cellspacing="0" width="90%">
                                                          <thead>
                                                              <tr>
                                                            <th>Imagen</th>
                                                            <th>Producto</th>
                                                            <th>Tipo</th>
                                                            <th>Precio</th>
                                                                
                                                                  <th>Id</th>
                                                              </tr>
                                                          </thead>
                                                              <?php
                                                       
                                                                foreach($productos as $producto){ ?>
                                                                       <tr role="row" class="odd">
                                                                            <td><img src="<?=$producto->imgenpdt; ?>" style="width:100px" class="img-responsive"></td>
                                                                            <td><?=$producto->producto; ?></td>
                                                                            <td><?=$producto->tipoum; ?></td>
                                                              <td>$<?=number_format($producto->precio, 0, ',', '.');?></td>
                                                                           
                                                                            <td><?=$producto->id; ?></td>

                                                                      </tr>
                                                            <?php } ?> 
                                      </table>
                                      <br/>
                                </div>
                             </div>
        
 
                        <div class="col-md-4">
                          <div class="box box-primary col-xs-4"><br/>
                                        <div class="info-box bg-green">
                                                 <span class="info-box-icon"><i class="glyphicon glyphicon-scale"></i></span>
                                          <div class="info-box-content">
                                                 <span class="info-box-text">Hectareas Agricultores Registrados</span>
                                            <?php
                                              $subtotal_numero_hectareas=0;
                                              foreach($agricultores as $agricultor){ 
                                              $subtotal_numero_hectareas+=$agricultor->suma_hectareas_fincas($agricultor->id);
                                              ?>
                                            <?php } ?>   
                                                <span class="info-box-number"><?php echo number_format($subtotal_numero_hectareas, 0, ',', '.');?></span>
                                                    <div class="progress">
                                                      <div class="progress-bar" style=""></div>
                                                    </div>                  
                                          </div>
                                        </div>
                                          <div class="info-box">
                                                 <span class="info-box-icon bg-aqua"><i class="glyphicon glyphicon-user"></i></span>
                                            <div class="info-box-content">
                                                 <span class="info-box-text">N??mero de <br/>Agricultores</span>
                                                 <span class="info-box-number"><?=$cant_agricultores;?></small></span>
                                            </div>
                                          </div>
                                          <div class="info-box">
                                            <span class="info-box-icon bg-green"><i class="glyphicon glyphicon-leaf"></i></span>
                                                  <div class="info-box-content">
                                                    <span class="info-box-text">N??mero de Fincas</span>
                                                    <span class="info-box-number"><?=$cant_fincas;?></span>
                                                  </div>
                                          </div>
                                          <div class="info-box">
                                            <span class="info-box-icon bg-red"><i class="glyphicon glyphicon-calendar"></i></span>
                                            <div class="info-box-content">
                                              <span class="info-box-text">N??mero de <br/> Visitas T??cnicas</span>
                                              <span class="info-box-number"><?=$cant_visitas;?></span>            
                                            </div>
                                          </div>

                        </div>
                     </div></div>


@endsection
@section('scripts')
<script>
$(document).ready(function() {
    $('#lista_productos').DataTable( {
        "order": [[ 3, "desc" ]],
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
                 ]
                                   } );
                          } );
</script>
  <script>
    $(document).ready(function(){
      $("#mostrarmodal").modal("show");
    });
</script>
<style>
    .img-responsive:hover {
    transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
@endsection
