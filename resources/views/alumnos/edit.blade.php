@extends('layouts.app')

@section('title', 'Editar Alumno')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-warning text-white">
                <h4 class="mb-0">
                    <i class="fas fa-edit"></i> Editar Alumno
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $alumno->nombre) }}" required>
                        @error('nombre')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido', $alumno->apellido) }}" required>
                        @error('apellido')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', $alumno->email) }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <select class="form-control @error('curso') is-invalid @enderror" id="curso" name="curso" required>
                            <option value="1ºESO" @selected(old('curso', $alumno->curso) == '1ºESO')>1ºESO</option>
                            <option value="2ºESO" @selected(old('curso', $alumno->curso) == '2ºESO')>2ºESO</option>
                            <option value="3ºESO" @selected(old('curso', $alumno->curso) == '3ºESO')>3ºESO</option>
                            <option value="4ºESO" @selected(old('curso', $alumno->curso) == '4ºESO')>4ºESO</option>
                        </select>
                        @error('curso')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" value="{{ old('edad', $alumno->edad) }}" required>
                        @error('edad')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">
                            <i class="fas fa-save"></i> Actualizar
                        </button>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
