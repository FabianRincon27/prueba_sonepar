<div class="modal fade" id="addMaterial" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Material</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('post-material') }}" method="POST">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 mb-3">
                            <label for="">Nombre</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3">
                            <label for="">Cantidad</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>
                        <div class="col-md-4 col-sm-12 mb-3">
                            <label for="">Precio</label>
                            <input type="number" name="price" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="">Descripción</label>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <label for="">Especificaciones</label>
                            <textarea name="specifications" rows="3" class="form-control"></textarea>
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
