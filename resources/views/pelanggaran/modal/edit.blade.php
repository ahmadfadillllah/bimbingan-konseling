<div class="modal fade" id="editPelanggaran{{ $dp->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('pelanggaran.update', $dp->id) }}" method="POST">
                <input type="text" class="form-control input-rounded" value="{{ $pelanggaran->id }}" name="pelanggaran_id" readonly hidden>
                <input type="text" class="form-control input-rounded" value="{{ $siswa->id }}" name="siswa_id" readonly hidden>
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">Tipe Pelanggaran</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" name="kategori_id" required>
                                <option {{ $dp->kategori_id == $dp->kategori_id ? "$dp->kategori->nama" : ""}} value="{{ $dp->kategori_id }}">{{ $dp->kategori->nama }}</option>
                                @foreach ($kategori as $k)
                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Dilaporkan Oleh</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" value="{{ $dp->dilaporkan_oleh }}" name="dilaporkan_oleh" required>
                        </div>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="">Catatan</label>
                        <div class="mb-3">
                            <textarea class="form-control input-rounded" name="catatan">{{ $dp->catatan }}</textarea>
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
