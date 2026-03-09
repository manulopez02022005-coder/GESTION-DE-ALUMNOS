@extends('layouts.app')

@section('title', 'Inicio - CRUD Alumnos')

@section('content')
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="jumbotron bg-light p-5 rounded">
            <h1 class="display-4">
                <i class="fas fa-book"></i> Sistema de Gestión de Alumnos
            </h1>
            <p class="lead">Bienvenido al CRUD de alumnos. Aquí puedes gestionar de forma sencilla toda la información de los estudiantes.</p>
            <hr class="my-4">
            <p>Usa el menú superior para navegar entre las diferentes opciones del sistema.</p>
            
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <i class="fas fa-list fa-3x text-primary mb-3"></i>
                            <h5 class="card-title">Ver Alumnos</h5>
                            <p class="card-text">Consulta la lista completa de alumnos registrados.</p>
                            <a href="{{ route('alumnos.index') }}" class="btn btn-primary">
                                <i class="fas fa-eye"></i> Ver Lista
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <i class="fas fa-user-plus fa-3x text-success mb-3"></i>
                            <h5 class="card-title">Nuevo Alumno</h5>
                            <p class="card-text">Registra un nuevo alumno en el sistema.</p>
                            <a href="{{ route('alumnos.create') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Crear
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection