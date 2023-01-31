<div class="modal fade" id="editKategori-{{ $k->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Kategori Pelanggaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('kategori.update', $k->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Pelanggaran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nama"
                                value="{{ $k->nama }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Bobot Poin</label>
                        <div class="mb-3">
                            <input type="number" class="form-control input-rounded" name="bobot"
                            value="{{ $k->bobot }}" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
