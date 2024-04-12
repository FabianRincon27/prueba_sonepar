@extends('master')
@section('title', 'Inicio')

@section('content')
    <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-between">
            <h5>Listado de Transacciones</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th>Tipo de transacción</th>
                        <th>Cantidad</th>
                        <th>Material</th>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>
                                    @if ($transaction->tipo == 0)
                                        Compra
                                    @else
                                        Venta
                                    @endif
                                </td>
                                <td>{{ $transaction->quantity }}</td>
                                <td>{{ $transaction->material->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
