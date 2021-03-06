@extends('layouts.app')

@section('htmlheader_title')
  Home
@endsection



@section('main-content')
 
   
 
<div class="row docs-premium-template">

  <div class="col-md-6">

    <div class="box box-primary col-xs-6">
                
                <div class="box-header">
                  <div class="callout callout-info">
                  <h3 class="box-title">Para iniciar, Crea un Nuevo Agricultor</h3>
                </div>
                 <div class="alert alert-danger"  data-toggle="tooltip" data-placement="bottom"  title="Si ya has creado el agricultor y la finca, por favor ve al enlace [+Ir]." style="background:#dd4b39 !important">
                      
                  <h4 class="box-title">Si ya has creado el agricultor y la finca, por favor ve al siguiente enlace.</h4>
                  <a href="{{asset('form_nueva_visita_agricultor_creado')}}"><h4>+Ir</h4></a>
                </div>
                </div><!-- /.box-header -->

<div id="notificacion_resul_fanu"></div>



<form  id="f_nuevo_prospecto"  method="post"  action="{{ url('/agregar_nuevo_agricultor') }}" class="" >                
  
  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
           
<?php if( isset($errors) ){ ?>
<ul>
     
      <?php foreach($errors->all() as $error){ ?>
              <li style="color:#FA206A;" ><?= $error  ?></li>
      <?php }  ?>

</ul>

<?php }  ?>  
         
    <div class="row docs-premium-template">

          <div class="col-md-6">
                          <div class="form-group">
                                                <label for="nombre">Nombre Agricultor*</label>
                                                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" >
                          </div>
                 </div>         
                  <div class="col-md-6">
                          <div class="form-group">
                                  <label for="tipousuario">Origen</label>
                                                <select name="canal" class="form-control" id="canal" >

                                                  <option>Selecciona</option>
                                                 
                                          <?php  for($i=0;$i<=count($canales)-1;$i++){  if($canales[$i]->id !=$i){ ?>

                                                <option value="<?= $canales[$i]->id  ?>" ><?= $canales[$i]->fuente ?></option>
                                                <?php   }} ?>
                                                </select>                   
                               </div>
                        </div>
                  </div>

<div class="row docs-premium-template">

          <div class="col-md-6">
                          <div class="form-group">
                                  <label for="pais">Pa??s</label>
                                                <select name="pais" class="form-control" id="pais" >
                                                 <option>Selecciona un pais</option>
                                          <?php  for($i=0;$i<=count($paises)-1;$i++){  if($paises[$i]->id !=$i){ ?>

                                                <option value="<?= $paises[$i]->id  ?>" ><?= $paises[$i]->nombre ?></option>
                                                <?php   }} ?>
                                                </select>                   
                               </div>
                               </div>

                <div class="col-md-6">
                          <div class="form-group">
                                  <label for="departamento">Departamento</label>
                                                <select name="departamento" class="form-control" id="departamento" >
                                                 <option> Departamento </option>
                                                 <option value="">Selecciona:</option>
                                                </select>                     
                          </div>
                           </div>
                          </div>  

    <div class="row docs-premium-template">

          <div class="col-md-6">
                          <div class="form-group">
                                                  <label for="email">Email*</label>
                                                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" >
                          </div>
                          </div>
            <div class="col-md-6">
                          <div class="form-group">
                                                  <label for="telefono">Celular de Contacto</label>
                                                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresar" >
                          </div>
                        </div>
                      </div>
 
    <div class="row docs-premium-template">
          <div class="col-md-6">
                          <div class="form-group">
                                  <label for="cultivo">Cultivo Principal</label>
                                                <select name="cultivo" class="form-control" id="cultivo" >
                                                  <option>Selecciona</option>
                                                 
                                          <?php  for($i=0;$i<=count($cultivos)-1;$i++){  if($cultivos[$i]->id !=$i){ ?>

                                                <option value="<?= $cultivos[$i]->id  ?>" ><?= $cultivos[$i]->cultivo ?></option>
                                                <?php   }} ?>
                                                </select>                   
                               </div>
                               </div>
            <div class="col-md-6">
                          <div class="form-group">
                                                <label for="ciudad">No. Hectareas</label>
                                                <input type="text" class="form-control" id="hectareas" name="hectareas" placeholder="N??mero Hectar??as" >
                          </div>
                          </div> 
             


                                                  
                                                  <input type="hidden" class="form-control" id="zona" name="zona" placeholder="Zona" value="">
                                                   <input type="hidden" class="form-control" id="email_jz" name="email_jz" placeholder="Zona" value="">


                <div class="col-md-6">
                          <div class="form-group">
                                  <label for="interesado">Interesado en:</label>
                                                 <select id="interesado" name="interesado" class="form-control">
                                                  
                                          <?php  for($i=0;$i<=count($tipointeres)-1;$i++){  if($tipointeres[$i]->id !=$i){ ?>

                                                <option value="<?= $tipointeres[$i]->id  ?>" ><?= $tipointeres[$i]->nombre ?></option>
                                                <?php   }} ?>
                                                 </select>       
                                                       
                          </div>
                </div>
                <div class="col-md-6">
                            <div class="form-group">
                                                <label for="stage">Estado</label>
                                                <select  name="stage" class="form-control" id="stage" >
                                          <?php  for($i=0;$i<=count($status)-1;$i++){  if($status[$i]->id !=$i){ ?>

                                                <option value="<?= $status[$i]->id  ?>" ><?= $status[$i]->nombre ?></option>
                                                <?php   }} ?>
                                               </select>          
                                    </div>
                                    </div>
                         <div class="col-md-6">
                          <div class="form-group">
                                                <label for="distribuidor">Distribuidor</label>
                                                <input type="text" class="form-control" id="distribuidor" name="distribuidor" placeholder="Distribuidor que le puede vender?" >
                          </div>
                          </div> 

                      <div class="col-md-6">
                            <div class="form-group">
                                                  <label>Perfil del Agricultor</label>
                                                  <textarea class="form-control" rows="3" name="observaciones" placeholder="Por favor escribe un perfil del agricultor"></textarea>
                          </div>
                     
                       
                       
                          
                          <div class="form-group ">
                                                            <button type="submit" class="nbtn-two">Crear Agricultor</button>
                                        </div>

                                      </div>

</form>
</div>
</div>
</div>

                               <div class="col-md-6">
                                 <div class="box box-primary col-xs-6">   

  <h3 class="box-title">Fenolog??a del Cultivo</h3>
                                 <div class="box box-primary col-xs-6">   


<input type="hidden" class="form-control" id="idcultivo" name="idcultivo" placeholder="idcultivo" value="">



   <img src="cultivo/13/fenologia.jpg"  alt="Fenolog??a"  style="width:100%;height:auto;" id="fenologia_cultivo" name="fenologia_cultivo">






 </div>

  <h3 class="box-title">Tu ubicaci??n actual</h3>


                            <div id="map"style="width:100%;height:80%;"></div>
                            <input type="text" id="coords" name="coords">
                            
                           

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
        

                                </div>
                              </div>

                   


</div></div>


</div>

  

  
    

@endsection


<script>
var marker;          //variable del marcador
var coords = {};    //coordenadas obtenidas con la geolocalizaci??n
//var map, infoWindow;
//Funcion principal
initMap = function (){
    //usamos la API para geolocalizar el usuario

        navigator.geolocation.getCurrentPosition(
          function (position){
            coords =  {
              lng: position.coords.longitude,
              lat: position.coords.latitude,
            };
            var coords= coords;
            setMapa(coords);  //pasamos las coordenadas al metodo para crear el
          },
          function(error){console.log(error);});
}




var coords = coords;
function setMapa (coords)
{   
      //Se crea una nueva instancia del objeto mapa
      var map = new google.maps.Map(document.getElementById('map'),
      {
       // zoom: 13,
         zoom: 18,
        mapTypeId: google.maps.MapTypeId.HYBRID,
        center:new google.maps.LatLng(coords.lat,coords.lng),
              });
              
       var goldStar = {
          path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z',
          fillColor: 'yellow',
          fillOpacity: 0.8,
          scale: 0.2,
          strokeColor: 'gold',
          strokeWeight: 14
        };
        

        
        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };
        

      //Creamos el marcador en el mapa con sus propiedades
      //para nuestro obetivo tenemos que poner el atributo draggable en true
      //position pondremos las mismas coordenas que obtuvimos en la geolocalizaci??n
       // var markerLabel = 'YO!';
        marker = new google.maps.Marker({
        map: map,
        draggable: false,
        animation: google.maps.Animation.BOUNCE,
        map: map,
        shape: shape,
        title: 'Aqu?? estoy!',
         icon: 'https://www.agronielsen.com/encampo/public/imagenes/maker-agronielsen.png',
       label: {
          text: 'Aqu?? estoy',
          color: "#fff",
          fontSize: "16px",
          fontWeight: "bold",
          background:"#fff",
          width:"100px"
             },
       
        position: new google.maps.LatLng(coords.lat,coords.lng),
        
       
      });
      
    //  google.maps.event.addDomListener(window, 'load', initMap);
      
      //agregamos un evento al marcador junto con la funcion callback al igual que el evento dragend que indica 
      //cuando el usuario a soltado el marcador
   //   marker.addListener('click', toggleBounce);
      
     /*       google.maps.event.addDomListener(window, 'load', function (event)
      {
              document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
        });*/
        
                 
      
      marker.addListener( 'mouseover', function (event)
      {
        //escribimos las coordenadas de la posicion actual del marcador dentro del input #coords
        document.getElementById("coords").value = this.getPosition().lat()+","+ this.getPosition().lng();
      });

}
//callback al hacer clic en el marcador lo que hace es quitar y poner la animacion BOUNCE
function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
// Carga de la libreria de google maps 
    </script>
    


    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2O6NRzoS7rpQ4ftOgrrzOdPLHUcb1RJk&callback=initMap" async defer></script>




@section('scripts')
<script>
    $(document).ready(function(){
          navigator.geolocation.getCurrentPosition(
          function (position){
            coords =  {
            lng: position.coords.longitude,
            lat: position.coords.latitude,                            }
        document.getElementById("coords").value = '{"lat":'+position.coords.latitude+',"lnt":'+ position.coords.longitude+'}';
                      })
                      });
    </script>


<script>
$(document).ready(function() {
$("#pais").change(function(event){
$.get("departamentos/"+event.target.value+"",function(response,state) {
$("#departamento").empty();
$("#departamento").append("<option value=''>Selecciona un departamento</option>");
for(i=0; i<response.length; i++) {
$("#departamento").append("<option value='"+response[i].id+"'>"+response[i].departamento+"</option>");
                                   }
                                                                 });
                               });
                               });
</script>
<script>  
$(document).ready(function() {
$("#agricultor").change(function(event){
$.get("id_fincas_agri/"+event.target.value+"",function(response,state) {
$("#nombre_finca").empty();
for(i=0; i<response.length; i++) {
$("#nombre_finca").append("<option value='"+response[i].id+"'>"+response[i].finca+"</option>");
                                   }
                                                                  });
                                         });
                                  });
</script>
<script>  
$(document).ready(function() {
$("#agricultor").change(function(event){
$.get("id_ciudad_agri/"+event.target.value+"",function(response,state) {
$("#id_ciudad").empty();
var id_ciudad= response[0].id_ciudad;
$("#id_ciudad").val(id_ciudad);
                                                                  });
                                         });
                                  });
</script>
<script>  
$(document).ready(function() {
$("#departamento").change(function(event){
$.get("datos_departamento/"+event.target.value+"",function(response,state) {
$("#zona").empty();
var nombre_zona= response[0].idZona;
$("#zona").val(nombre_zona);
                                                                  });
                                         });
                                  });
</script>
<script>  
$(document).ready(function() {
$("#departamento").change(function(event){
$.get("email_jz/Z1",function(response,state) {
$("#email_jz").empty();
var nombre_zona= response[0].mail_jz;
$("#email_jz").val(nombre_zona);
                                                                  });
                                         });
                                  });
</script>

<script>  
$(document).ready(function() {
$("#cultivo").change(function(event){
$.get("cultivo/"+event.target.value+"",function(response,state) {
$("#idcultivo").empty();
var idcultivo= response[0].id;
$("#idcultivo").val(idcultivo);
                                                                  });
                                         });
                                  });
</script>

<script>
var id_cultivo=13;  
$(document).ready(function() {
$("#cultivo").change(function(event){
$.get("cultivo/"+event.target.value+"",function(response,state) {
$("#fenologia_cultivo").empty();
var id_cultivo= response[0].id;
newImg = "<img src='{{asset('/cultivo/')}}'+'id_cultivo'+'\"fenologia.jpg\"'>";
$("#fenologia_cultivo").html(newImg);
                                                                  });
                                         });
                                  });
</script>

@endsection