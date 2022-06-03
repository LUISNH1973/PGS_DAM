@extends('layouts.template')

@section('content')
  

@foreach ($proyectos as $proyecto)

 <div class="col-md-6 col-lg-4 mb-5">
  <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1{{ $proyecto->id }}">
      <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
          <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
      </div>
      <img class="img-fluid" src="{{ $proyecto->imagen }}" alt="..." />
  </div>
</div>
<!-- Portfolio Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1{{ $proyecto->id }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
          <div class="modal-body text-center pb-5">
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-lg-8">
                          <!-- Portfolio Modal - Title-->
                          <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $proyecto->nombre }}</h2>
                          <!-- Icon Divider-->
                          <div class="divider-custom">
                              <div class="divider-custom-line"></div>
                              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                              <div class="divider-custom-line"></div>
                          </div>
                          <!-- Portfolio Modal - Image-->
                          <img class="img-fluid rounded mb-5" src="{{ $proyecto->imagen }}" alt="..." />
                          <!-- Portfolio Modal - Text-->
                          <p class="mb-4">{{ $proyecto->descripcion }}</p>
                                     <button  data-bs-dismiss="modal">
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item mx-0 mx-lg-3"><a class="nav-link py-3 px- px-lg-3 rounded" href="#contact">Contáctame</a></li>
                                        </ul>
                                    </button>
                                    <br />
                                     <button  data-bs-dismiss="modal">
                                         <ul class="navbar-nav ms-auto">
                          <a href="assets\img\img_vinos\Nuestros_vinos.jpg" class="nav-item mx-0 mx-lg-3" ><i class="nav-link py-3 px- px-lg-3 rounded"></i>Visita La Bodega</a>
                          </ul>
                              </button>
                         
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

@endforeach



@endsection
