@extends('template.master')
@section('contenido_central')
</br></br></br></br>


<div class="team-holder theme-padding" style="background-image: url('{!! asset('estilo/images/fondo_reg.jpg') !!}'); background-repeat: no-repeat; background-size: 100%;" >
 
         <div class="container">

            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2 style="color: white;" >¡Comienza tu registro!</h2>
                  <p style="color: white;">Elige tu categoría</p>
               </div>
            </div>

            <div id="team-slider">
               <div class="container">

                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="{!! asset('estilo/images/jug_reg.jpg') !!}" alt="" width="265px" height="370px">
                        <div class="player-name">
                           <div class="desination-2">Jugadora / Jugador</div>
                           <h5>Registrarme</h5>
                           <span class="player-number">
                              <a href="bienvenida">
                                 <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                              </a>
                           </span>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="{!! asset('estilo/images/imgex.jpg') !!}" alt="" width="265px" height="370px">
                        <div class="player-name">
                           <div class="desination-2">Exjugadora / Exjugador</div>
                              <h5>Registrarme</h5>
                                 <span class="player-number">
                                    <a href="bienvenida">
                                       <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                                    </a>
                                 </span>
                        </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="{!! asset('estilo/images/coach_reg.jpg') !!}" alt="" width="265px" height="370px">
                           <div class="player-name">
                              <div class="desination-2">Coaches</div>
                                 <h5>Registrarme</h5>
                                    <span class="player-number">
                                       <a href="bienvenida">
                                          <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                                       </a>
                                    </span>
                           </div>
                     </div>
                  </div>

                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <img src="{!! asset('estilo/images/arbitro_reg.jpg') !!}" alt="" width="265px" height="370px">
                           <div class="player-name">
                              <div class="desination-2">Árbitra / Árbitro</div>
                                 <h5>Registrarme</h5>
                                    <span class="player-number">
                                       <a href="reg_arbitro">
                                          <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                                       </a>
                                    </span>
                           </div>
                     </div>
                  </div>


                  <div class="col-md-3">
                  </br><div> <img ><div><div ></div>
                           <h5></h5><span><a ></a></span></div></div>
                  </div>

                  <div  class="col-md-3">
                    </br>  
                     <div class="team-column style-2"> 
                        <img src="{!! asset('estilo/images/porristas_reg.jpg') !!}" alt="" width="265px" height="370px">
                           <div class="player-name">
                              <div class="desination-2">Porristas</div>
                                 <h5>Registrarme</h5>
                                    <span class="player-number">
                                     <a href="bienvenida">
                                       <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                                     </a>
                                    </span>
                           </div>
                     </div>
                  </div>

                  <div class="col-md-3" >
                   </br>
                     <div class="team-column style-2">
                        <img src="{!! asset('estilo/images/safanal_reg.jpg') !!}" alt="" width="265px" height="370px">
                           <div class="player-name">
                              <div class="desination-2">SAFANAL</div>
                               <h5>Registrarme</h5>
                                 <span class="player-number">
                                    <a href="bienvenida">
                                     <img src="{!! asset('estilo/images/flecha.png') !!}" alt="" width="30" height="30">
                                    </a>
                                 </span>
                           </div>
                     </div>
                  </div>

               </div>
            </div>
            </div>
         </div>

</div>
@endsection()