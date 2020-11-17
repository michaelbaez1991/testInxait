@extends('layout')

@section('content') 
    {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"> --}}
        <div class="row">
            <div class="col-3">
                <br><br>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('winner'))
                    <div class="alert alert-success">
                        <h4>Tenemos un ganador:</h4> <br>
                        @foreach (session('winner') as $datos)
                            <p>Nombre: {{ $datos->nombre }}</p><br>
                            <p>Apellido: {{ $datos->apellido }}</p><br>
                            <p>Cedula: {{ $datos->cedula }}</p><br>
                            <p>Celular: {{ $datos->celular }}</p><br>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="col-6"><br>
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Registro de paticipantes</h2>
                        </div>
                    <div class="card-body">
                        <form action="{{ route('creatRregister') }}" method="POST" >
                            {{ csrf_field() }}
                            {{-- NOMBRE --}}
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
        
                            {{-- APELLIDO --}}
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" name="apellido" required>
                            </div>
        
                            {{-- CEDULA --}}
                            <div class="form-group">
                                <label for="cedula">Cédula</label>
                                <input type="text" class="form-control" id="cedula" name="cedula" required>
                            </div>
        
                            {{-- CELULAR --}}
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular" required>
                            </div>
        
                            {{-- CORREO --}}
                            <div class="form-group">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" name="correo" required>
                            </div>

                            {{-- DEPARTAMENTO --}}
                            <div class="form-group">
                                <label for="departamento_id">Departamento</label>
                                <select class="form-control" id="departamento_id" name="departamento_id" required>
                                    <option disabled selected>...</option>
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
        
                            {{-- CIUDAD --}}
                            <div class="form-group">
                                <label for="ciudad_id">Ciudad</label>
                                <select class="form-control" id="ciudad_id" name="ciudad_id" required>
                                </select>
                            </div>
                            
                            {{-- AUTORIZACION --}}
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="autorizacion" name="autotizacion" required>
                                <label class="form-check-label" for="autorizacion">“Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales”. Haga clic aquí)</label>
                            </div>
                    </div>

                    <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <br><br><br><br><br><br><br><br>
                <p class="text-center">
                Click <a href="{{ route('exportExcel') }}">aquí</a> para descargar en Lista de registros en excel.
                </p>
            </div>
        </div>
    {{-- </div> --}}
@endsection

