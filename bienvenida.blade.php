@extends('template.master')
@section('contenido_central')

</br>
<div class="full-slider">
   <div id="carousel-example-generic" class="carousel slide">
               <!-- Indicators -->
      <ol class="carousel-indicators">
         <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
         <li data-target="#carousel-example-generic" data-slide-to="1" ></li>
         <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
               <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
 <!-- First slide -->
</br></br></br></br>
            <div class="item active" data-ride="carousel" data-interval="5000" style="background-image:url('{!! asset('estilo/images/bg1A3.jpg') !!}');" >
               <div class="carousel-caption">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>Bienvenidos al<br>  <span class="color-yellow" > Directorio Nacional de Futbol </span><br>Americano ®</h3>
                           <p>Un sitio de y para todos los miembros de ésta gran élite a nivel nacional, nos complace invitarlos a navegar por ésta herramienta de información, servicios, historia, consejos y entretenimiento del Futbol Americano, ha sido creada para todo aquel que ama este deporte, esperamos sea de su agrado<br>
                                 ¡Bienvenidos/as al mundo de las tacleadas...!
                              </p>
                             <a class="btn btn-primary btn-lg" href="presentacion">Saber mas</a>
                        </div>
                     </div>
               </div>
            </div>
                  <!-- /.item -->
                  <!-- Second slide -->
            <div class="item skyblue" data-ride="carousel" data-interval="5000">
               <div class="carousel-caption">
                  <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"></div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>If you Don’t Practice<br>You <span class="color-yellow">Don’t Derserve</span><br>to win!</h3>
                              <p>You can make a case for several potential winners of<br>the expanded European Championships.</p>
                                 <button class="btn btn-primary btn-lg">Button</button>
                        </div>
                     </div>
               </div>
            </div>
                  <!-- /.item -->
         </div>
   </div>
</div>

@endsection()