<div class="modal fade" id="updateGuru-{{ $g->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('guru.update', $g->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">NIK</label>
                        <div class="mb-3">
                            <input type="number" class="form-control input-rounded" name="nik"
                                value="{{ $g->nik }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control input-rounded" name="email"
                            value="{{ $g->email }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No.Handphone</label>
                        <div class="mb-3">
                            <input type="number" class="form-control input-rounded" name="no_hp"
                                value="{{ $g->no_hp }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="name"
                                value="{{ $g->name }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Mata Pelajaran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="mata_pelajaran"
                            value="{{ $g->mata_pelajaran }}" required>
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
