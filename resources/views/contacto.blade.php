@extends('layouts.panel')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12" id="contact">
                <div class="row">
                    <div class="col-md-12" id="titleServices">
                        <div class="row" style="justify-content: center;">
                            <h1>Contacto</h1>
                        </div>
                    </div>
            
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <form id="form_contacto" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="full_name">Nombre</label>
                                            <input type="text" name="full_name" id="full_name" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="marca">Marca</label>
                                            <input type="text" name="marca" id="marca" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="modelo">Modelo</label>
                                            <input type="text" name="modelo" id="modelo" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="foto">Foto</label>
                                            <input type="file" name="foto" id="foto" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-md-4"></div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            Enviar
                                        </button>
                                    </div>
                                    <div class="col-md-4"></div>


                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>


        </div>
    </div>
    <div class="modal fade modalborderradius" id="mdMensajes" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content ">
                <div class="modal-header encabezadopaneles">
                    <h5 class="modal-title" id="exampleModalLabel">Mensaje </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <div class="modal-body cuerpodepaneles">
    
                    <h3 style="text-align: center;"><div id="mensaje_advertencia"></div></h3>
    
                    <hr>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4 d-flex justify-content-center">
                                <button class="btn botondesactivar" type="submit" data-dismiss="modal">Cerrar</button>
                                {{-- <button type="submit" class="btn botoneditar" onclick="Delete_Promocion();">Continuar</button> --}}
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
    
    
            </div>
        </div>
    </div>
@endsection


@section('custom_script')
<script src="{{ secure_asset('js/contacto.js') }}"></script>
@endsection