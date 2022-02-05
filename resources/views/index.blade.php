@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="banner-image">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ asset('banner.png') }}" alt="bottle" class="bottle">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="banner-text">
                    <h1>Servio de venta y renta de dispensadores de Agua</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nam modi aperiam nesciunt nostrum, esse laudantium neque, iure delectus similique ea ipsa laboriosam aspernatur labore deleniti ex earum impedit. Commodi!
                    </p>
                </div>
                <div class="banner-effect">
                    <img src="{{ asset('water_effect.png') }}" alt="water_effect" class="water-effect">
                </div>
            </div>

            <div class="col-md-12 col-lg-12" id="cards-services">
                <div class="row">
                    <div class="col-md-12" id="titleServices">
                        <div class="row" style="justify-content: center;">
                            <h1>Servicios</h1>
                        </div>
                    </div>

                    <div class="col-lg-2"></div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-service text-center">
                            <div class="card-image">
                                <img src="{{ asset('water-dispenser.png') }}" alt="">
                            </div>
                            <div class="card-text-bottle">
                                <h4>
                                    Renta
                                </h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit dicta molestias suscipit velit cumque! Iusto qui fugit saepe quibusdam? Sequi fuga itaque hic laudantium optio iure at dignissimos porro voluptates.</p>
                                <a href="{{ url('contacto') }}">
                                    <i class="fas fa-arrow-circle-right"></i>
                                    Información
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-service text-center">
                            <div class="card-image">
                                <img src="{{ asset('water-dispenser.png') }}" alt="">
                            </div>
                            <div class="card-text-bottle">
                                <h4>
                                    Venta
                                </h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit dicta molestias suscipit velit cumque! Iusto qui fugit saepe quibusdam? Sequi fuga itaque hic laudantium optio iure at dignissimos porro voluptates.</p>
                                <a href="{{ url('contacto') }}">
                                    <i class="fas fa-arrow-circle-right"></i>
                                    Información
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2"></div>
                </div>
            </div>

 

        </div>
    </div>
@endsection

@section('custom_script')
@endsection