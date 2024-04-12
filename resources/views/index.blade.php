@extends('master')
@section('title', 'Inicio')

@section('content')
    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#addMaterial">Crear Material</button>
        <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addTransaction">Crear Transacción</button>
        @include('components.addMaterial')
        @include('components.addTransaction')
    </div>
    <div class="card shadow-lg">
        <div class="card-header">
            <h5>Listado de Materiales Electricos</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Especificaciones</th>
                        <th class="text-center">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach ($materiales as $material)
                            @include('components.editMaterial')
                            <tr>
                                <td>{{ $material->name }}</td>
                                <td>{{ $material->description }}</td>
                                <td>{{ $material->quantity }}</td>
                                <td>${{ number_format($material->price, 0 ,',','.') }}</td>
                                <td>{{ $material->specifications }}</td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-sm btn-warning me-2" data-bs-toggle="modal" data-bs-target="#editMaterial{{ $material->id }}">Editar</button>
                                        <form action="{{ route('delete-material', $material->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
