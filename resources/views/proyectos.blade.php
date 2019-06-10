@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="container">

                <h3 class="my-5 px-3"><i class="fas fa-project-diagram mr-2"></i> Proyectos</h3>

                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <!--
                        Web Services
                        -->
                        <h5 class="my-5 pl-3">
                            <i class="fal fa-server mr-2"></i>
                            Servicios
                        </h5>

                        <!-- User -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-user mr-2"></i> Usuario
                                </h4>
                                <p class="mt-3 mb-1">Obtén los datos de un usuario.</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-car mr-2"></i> Vehículo
                                </h4>
                                <p class="mt-3 mb-1">Obtén los vehículos de un usuario.</p>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-map-marker mr-2"></i> Ubicación
                                </h4>
                                <p class="mt-3 mb-1">Obtén la ubicación de uno o varios vehículos en una fecha y hora.</p>
                            </div>
                        </div>

                        <!-- Route -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-map mr-2"></i> Recorrido
                                </h4>
                                <p class="mt-3 mb-1">Obtén la ruta de un vehículo en un rango de fechas.</p>
                            </div>
                        </div>

                        <!-- Lock -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-key mr-2"></i> Corta corriente
                                </h4>
                                <p class="mt-3 mb-1">Deshabilita el arranque de un vehículo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">

                        <!--
                        Web Services
                        -->
                        <h5 class="my-5 pl-3">
                            <i class="fal fa-browser mr-2"></i>
                            Aplicaciones
                        </h5>

                        <!-- GPS -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-user mr-2"></i> Plataforma de Monitoreo
                                </h4>
                                <p class="mt-3 mb-1">Monitorea una flota de vehículos.</p>
                            </div>
                        </div>

                        <!-- GPS -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-truck mr-2"></i> Plataforma de Despachos
                                </h4>
                                <p class="mt-3 mb-1">Gestiona la logística de tu empresa.</p>
                            </div>
                        </div>

                        <!-- App Tracking -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="far fa-car mr-2"></i> Aplicación de Monitoreo
                                </h4>
                                <p class="mt-3 mb-1">Visualiza tus vehículos desde tu celular.</p>
                            </div>
                        </div>

                        <!-- App Deliveries -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-0">
                                    <i class="fal fa-user-hard-hat mr-2"></i> Aplicación de Conductores
                                </h4>
                                <p class="mt-3 mb-1">Controla los envíos y entregas con el conductor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
