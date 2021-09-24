@extends('layouts.sidebar')
@section('homeContent')
    <div id="page-content-wrapper" class="w-100">

        <div class="form-row p-3">
            <div class="col-sm-11">
                <div class="md-form mt-0">
                    <p>Para guardar los cambios realizados de click en el siguiente boton</p>
                </div>
            </div>
            <div class="col-sm-1">
                <div class="md-form mt-0">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal"
                        data-whatever="@mdo">Guardar</i></button>
                </div>
            </div>
        </div>

        <div class="d-flex mt-3">
            <h3 class="card-link" data-toggle="collapse">
                Secciones
            </h3>
            <button type="button" class="btn btn-info btn-circle ml-auto" data-toggle="modal" data-target="#seccioncreate"
                data-whatever="@mdo">
                <i class="fa fa-plus"></i>
            </button>
        </div>
        <div id="accordion" class="mt-3">
            @foreach($secciones as $seccion)
            <div class="card">
                <div class="card-header estilo_div1">
                    <div class="d-flex">
                        <a class="card-link " data-toggle="collapse" href="#collapseOne{{$seccion->id}}">
                            {{$seccion->nombre}}
                        </a>
                        <button type="button" class="btn btn-success m-1  btn-circle ml-auto" data-toggle="modal"
                            data-target="#seccionedit" data-whatever="@mdo">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger m-1  btn-circle" data-toggle="modal"
                            data-target="#deleteModal" data-whatever="@mdo">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div id="collapseOne{{$seccion->id}}" class="collapse " data-parent="#accordion">
                    <div id="accordion3">
                        <div class="card">
                            <div class="card-header estilo_div2">
                                <div class=" d-flex">
                                    <a class="card-link" data-toggle="collapse" href="#collapseThree{{$seccion->id}}">
                                        Contenidos de seccion
                                    </a>
                                    <button type="button" class="btn btn-info btn-circle ml-auto" data-toggle="modal"
                                        data-target="#ContenidoCreate" data-whatever="@mdo">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseThree{{$seccion->id}}" class="collapse " data-parent="#collapseOne{{$seccion->id}}">
                                @foreach($seccion->contenidos as $contenido)
                                <div class="card-header">
                                    <div class=" d-flex">
                                        <div>
                                            {{$contenido->titulo}}
                                        </div>
                                        <button type="button" class="btn btn-success m-1  btn-circle ml-auto"
                                            data-toggle="modal" data-target="#ContenidoEdit" data-whatever="@mdo">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger m-1  btn-circle" data-toggle="modal"
                                            data-target="#deleteModal" data-whatever="@mdo">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div id="accordion2">
                        <div class="card">
                            <div class="card-header estilo_div2">
                                <div class=" d-flex">
                                    <a class="card-link" data-toggle="collapse" href="#collapseTwo{{$seccion->id}}">
                                        Subsecciones
                                    </a>
                                    <button type="button" class="btn btn-info btn-circle ml-auto" data-toggle="modal"
                                        data-target="#subseccioncreate" data-whatever="@mdo">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div id="collapseTwo{{$seccion->id}}" class="collapse " data-parent="#collapseOne{{$seccion->id}}">
                                <div id="accordion5">
                                    <div class="card">
                                    @foreach($seccion->subSecciones as $subseccion)
                                        <div class="card-header">
                                            <div class=" d-flex">
                                                <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                                    {{$subseccion->nombre}}
                                                </a>
                                                <button type="button" class="btn btn-success m-1  btn-circle ml-auto"
                                                    data-toggle="modal" data-target="#subseccionedit" data-whatever="@mdo">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger m-1  btn-circle "
                                                    data-toggle="modal" data-target="#deleteModal" data-whatever="@mdo">
                                                    <i class="fa fa-times"></i>
                                                </button>
                                            </div>                                        
                                        </div>
                                        <div id="collapseFive" class="collapse " data-parent="#accordion5">
                                            <div id="accordion4">

                                                <div class="card">
                                                    <div class="card-header estilo_div3">
                                                        <div class=" d-flex">
                                                            <a class="card-link" data-toggle="collapse"
                                                                href="#collapseFour">
                                                                Contenidos de subseccion
                                                            </a>
                                                            <button type="button" class="btn btn-info btn-circle ml-auto"
                                                                data-toggle="modal" data-target="#ContenidoCreate"
                                                                data-whatever="@mdo">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div id="collapseFour" class="collapse " data-parent="#accordion4">
                                                        <div class="card-header">
                                                        @foreach($subseccion->contenidos as $subcontenido)
                                                            <div class=" d-flex">
                                                                <div>
                                                                    {{$subcontenido->titulo}}
                                                                </div>
                                                                <button type="button"
                                                                    class="btn btn-success m-1  btn-circle ml-auto"
                                                                    data-toggle="modal" data-target="#ContenidoEdit"
                                                                    data-whatever="@mdo">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-danger m-1  btn-circle"
                                                                    data-toggle="modal" data-target="#deleteModal"
                                                                    data-whatever="@mdo">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row justify-content-center">
                <div class="">

                <!--modal para creacion de novedad-->
                <div class=" modal
                    fade" id="NovedadCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nueva novedad</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Tématica</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Descripción</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal para creacion de seccion-->
                <div class="modal fade" id="seccioncreate" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar sección: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal para edicion de seccion-->
                <div class="modal fade" id="seccionedit" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar sección: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal para creacion de subseccion-->
                <div class="modal fade" id="subseccioncreate" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar subsección en: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--modal para edicion de subseccion-->
                <div class="modal fade" id="subseccionedit" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar subsección en: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Nombre</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!--modal para creacion de contenido-->
                <div class="modal fade" id="ContenidoCreate" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agregar contenido en: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Tématica</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Descripción</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Imagen</label>
                                        <input type="file" class="form-control-file" id="File1">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Guardar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!--modal para edicion de contenido-->
                <div class="modal fade" id="ContenidoEdit" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Editar contenido en: </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Tématica</label>
                                        <input type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Descripción</label>
                                        <textarea class="form-control" id="message-text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Imagen</label>
                                        <input type="file" class="form-control-file" id="File1">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info">Editar</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal para delete-->
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="container d-flex pl-0"><img src="https://imgur.com/Kh1gwTq.png">
                                    <h5 class="modal-title ml-2" id="exampleModalLabel">Confirmación de eliminación</h5>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-muted">Está seguro que lo desea eliminar? Este cambio es irreversible
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger m-1 ">Eliminar</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
<script>

</script>
