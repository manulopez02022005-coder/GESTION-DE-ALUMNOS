@extends('layouts.app')

@section('title', 'Lista de Alumnos')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>
                <i class="fas fa-users"></i> Lista de Alumnos
            </h2>
            <a href="{{ route('alumnos.create') }}" class="btn btn-success">
                <i class="fas fa-user-plus"></i> Nuevo Alumno
            </a>
        </div>

        <div class="card">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Curso</th>
                            <th>Edad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($alumnos->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">
                                    <i class="fas fa-inbox fa-2x mb-2"></i>
                                    <p>No hay alumnos registrados</p>
                                </td>
                            </tr>
                        @else
                            @foreach($alumnos as $alumno)
                                <tr>
                                    <td><strong>{{ $alumno->id }}</strong></td>
                                    <td>{{ $alumno->nombre }}</td>
                                    <td>{{ $alumno->apellido }}</td>
                                    <td>{{ $alumno->email }}</td>
                                    <td>
                                        <span class="badge bg-info">{{ $alumno->curso }}</span>
                                    </td>
                                    <td>{{ $alumno->edad }} años</td>
                                    <td>
                                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-sm btn-info" title="Ver">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-warning" title="Editar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Eliminar" onclick="return confirm('¿Seguro que deseas eliminar este alumno?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection