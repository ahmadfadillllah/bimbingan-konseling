<div class="modal fade" id="insertGuru">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('guru.insert') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">NIK</label>
                        <div class="mb-3">
                            <input type="number" class="form-control input-rounded" name="nik"
                                placeholder="Masukkan NIK" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="name"
                                placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Email</label>
                        <div class="mb-3">
                            <input type="email" class="form-control input-rounded" name="email"
                                placeholder="Masukkan Email" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No. Handphone</label>
                        <div class="mb-3">
                            <input type="number" class="form-control input-rounded" name="no_hp"
                                placeholder="Masukkan No. Handphone" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Mata Pelajaran</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="mata_pelajaran"
                                placeholder="Masukkan Mata Pelajaran" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
