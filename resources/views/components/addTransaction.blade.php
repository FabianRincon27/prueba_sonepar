<div class="modal fade" id="addTransaction" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Realizar Transacción</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('transaction-material') }}" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="">Material</label>
                            <select name="material" class="form-select">
                                <option value="" selected disabled>Seleccione...</option>
                                @foreach ($materiales as $material)
                                    <option value="{{ $material->id }}">{{ $material->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Tipo de transacción</label>
                            <select name="type" class="form-select">
                                <option value="" selected disabled>Seleccione...</option>
                                <option value="0">Compra</option>
                                <option value="1">Venta</option>
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="">Cantidad</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
