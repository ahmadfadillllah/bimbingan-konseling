<div class="modal fade" id="insertPelanggaran">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Pelanggaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('pelanggaran.insert') }}" method="POST">
                <input type="text" class="form-control input-rounded" value="{{ $pelanggaran->id }}" name="pelanggaran_id" readonly hidden>
                <input type="text" class="form-control input-rounded" value="{{ $siswa->id }}" name="siswa_id" readonly hidden>
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">Tipe Pelanggaran</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" name="kategori_id" required>
                                <option value="">Pilih kategori</option>
                                @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Dilaporkan Oleh</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="dilaporkan_oleh" required>
                        </div>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="">Catatan</label>
                        <div class="mb-3">
                            <textarea class="form-control input-rounded" name="catatan"></textarea>
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
