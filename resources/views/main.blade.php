@extends('plantilla')
@section('content')

<div class="container">
            <img src="./Img/cover.jpg" alt="">
          </div>
          <h3>Grandes ofertas</h3>
        <section class="center align">
           <div class="container">
            <div class="row">
                <div class="col l6 s12 m12">
                  <div class="card">
                    <div class="card-image">
                      <img src="./Img/Acustic.png">
                      <span class="card-title black">Guitarras acusticas</span>
                    </div>
                    <div class="card-content">
                      <p class="flow-text">Encuentra la mas grande variedad de guitarras acusticas de las mejores marcas</p>
                    </div>
                    <div class="card-action">
                      <a href="{{route('acusticas')}}">Catalogo</a>
                    </div>
                  </div>
                </div>


                <div class="row">
                    <div class="col l6 m12 s12">
                      <div class="card">
                        <div class="card-image">
                          <img src="./Img/Electric.png">
                          <span class="card-title black">Guitarras electricas</span>
                        </div>
                        <div class="card-content">
                          <p class="flow-text">Si realmente quieres rockear o romper guitarras con estilo, visita el catalogo.</p>
                        </div>
                        <div class="card-action">
                          <a href="{{route('electricas')}}">Let`s rock!</a>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                        <div class="col l6 m6 s12">
                          <div class="card">
                            <div class="card-image">
                              <img src="./Img/Bass.png">
                              <span class="card-title black">Bajos</span>
                            </div>
                            <div class="card-content">
                              <p class="flow-text">Dicen que a los bajistas nadie los escucha, pero nosotros si.</p>
                            </div>
                            <div class="card-action">
                              <a href="{{route('bass')}}">Catalogo</a>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                            <div class="col l6 m6 s12">
                              <div class="card">
                                <div class="card-image">
                                  <img src="./Img/MenuPiano.jpg ">
                                  <span class="card-title black">Pianos</span>
                                </div>
                                <div class="card-content">
                                  <p class="flow-text">Intenta tocar estas teclas sin morir en el intento!</p>
                                </div>
                                <div class="card-action">
                                  <a href="{{route('pianos')}}">Catalogo</a>
                                </div>
                              </div>
                            </div>
              </div>   
           </div>
        </section>

@endsection