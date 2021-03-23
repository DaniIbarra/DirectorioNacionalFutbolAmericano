@extends('template.master')  <!-- Indicamos que llamaremos al master, donde incluye, pie,encabezado,etc -->
@section('contenido_central')<!-- Utilizamos secciones para los yield del master -->

</br></br></br>
<div class="contact" style="background-image: url('{!! asset('estilo/images/fondo2.jpg') !!}'); background-repeat: no-repeat; background-size: 130%; ">
  <div class="section-title">
            </br></br></br>

            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <h2 style="color: white;">Registro</h2>
                  <p style="color: white;">Ingresa tus datos</p>
               </div>
            </div>
          
          
  </div>

  <div>
    <tr>
      <td>
        <div class="col-md-5">
          <div class="contact-us">
            <form method="post" class="comments-form" id="contactform">
              <ul>
                <li>
                  <div class="form-group">
                     <input type="text" name="nombre" class="form-control" class="required" id="nombre" placeholder="Nombre">
                       <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="apellidos" class="form-control" class="required" id="apellidos" placeholder="Apellidos">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">Sexo</h6>
                      <select name="sexo" id="sexo">
                            <option value="1" >Femenino</option>
                            <option value="2">Masculino</option>
                      </select> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="direccion" class="form-control" class="required" id="direccion" placeholder="Direccion">
                       <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="email" name="correo" class="form-control" class="required" id="correo" placeholder="Correo electronico">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="telefono" class="form-control" class="required" id="telefono" placeholder="Telefono (con lada)">
                       <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">Fecha de nacimiento</h6>
                      <input type="date" name="cumpleanios" step="1" min="1900-01-01" max="2010-12-31" value="aaaa/mm/dd">
                       <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="prof_act" class="form-control" class="required" id="prof_act" placeholder="Profesion u oficio actual">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">¿Jugaste futbol americano?</h6>
                      <select name="exp" id="exp">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                      </select> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="anios" class="form-control" id="anios" placeholder="¿Cuántos años?">
                      <div class="validation"></div>
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="cat" class="form-control"  id="cat" placeholder="¿Qué categorias?">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">¿Has sido Coach?</h6>
                      <select name="exp" id="exp">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                      </select> 
                  </div>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </td>

      <td>
        <div class="col-md-5">
          <div class="contact-us">
            <form method="post" class="comments-form" id="contactform">
              <ul>
                <li>
                  <div class="form-group">
                    <input type="text" name="temporadas" class="form-control"  id="temporadas" placeholder="¿Cuántos años o temporadas llevas como árbitro?">
                      <div class="validation"></div> 
                  </div>
                 </li>
              </ul>
            </form>
          </div>

                <li>
                  <div class="form-group" style="color: white;">
                    <h6>¿En qué nivel has estado pitando?</h6>
                      <input type="checkbox" name="infantil" value="1" >Infantil</input> </br>
                      <input type="checkbox" name="juvenil" value="2">Juvenil</input></br>
                      <input type="checkbox" name="intermedia" value="3">Intermedia</input></br>
                      <input type="checkbox" name="liga_mayor" value="4">Liga Mayor</input></br>
                  </div>
                </li>

            <form method="post" class="comments-form" id="contactform">
              <ul>

                <li>
                  <div class="form-group">
                    <input type="text" name="asociacion" class="form-control" class="required" id="asociacion" placeholder="¿A qué asociación de oficiales perteneces?">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <input type="text" name="instructor" class="form-control" class="required" id="instructor" placeholder="¿Quién ha sido tu instructor?">
                      <div class="validation"></div> 
                  </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">¿Has tomado cursos o clinicas de arbitraje?</h6>
                      <select name="cur_arb" id="cur_arb">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                      </select> 
                  </div> 
                </li>

              </ul>
            </form>

                <li>
                  <div class="form-group" style="color: white;">
                    <h6>¿Qué posiciones desempeñas en el campo?</h6>
                      <input type="checkbox" name="referee" value="1">Referee</input> </br>
                      <input type="checkbox" name="umpire" value="2">Umpire</input></br>
                      <input type="checkbox" name="headline" value="3">Headline</input></br>
                      <input type="checkbox" name="line_judge" value="4">Line Judge</input></br>
                      <input type="checkbox" name="back_judge" value="5">Back Judge</input></br>
                      <input type="checkbox" name="field_judge" value="6">Field Judge</input></br>
                      <input type="checkbox" name="side_judge" value="7">Side Judge</input></br>
                      <input type="checkbox" name="c_central" value="7">C. Central</input></br>
                  </div>
                </li>

            <form method="post" class="comments-form" id="contactform">
              <ul>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">¿Has sido cadenero (Chain Crew)?</h6>
                      <select name="chain_crew" id="chain_crew">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                      </select> 
                    </div>
                </li>

                <li>
                  <div class="form-group">
                    <h6 style="color: white;">¿Has pitado fuera de México?</h6>
                      <select name="pit_int" id="pit_int">
                        <option value="1">Si</option>
                        <option value="2">No</option>
                      </select> 
                    </div> 
                  </li>
              </ul>
            </form>

              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary" style="position: center;">Registrarme </button></br></br></br>
              </div>
        </div>
      </td>
    </tr>
  </div>
              
</div>
@endsection()


