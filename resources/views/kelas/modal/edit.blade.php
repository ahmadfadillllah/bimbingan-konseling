<div class="modal fade" id="updateKelas-{{ $data['kelas'][$key]->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('kelas.update', $data['kelas'][$key]->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">Tingkat Kelas</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" name="tingkat_kelas" required>
                                <option {{ $data['kelas'][$key]->tingkat_kelas == 'I' ? "I" : ""}} value="{{ $data['kelas'][$key]->tingkat_kelas }}">{{ $data['kelas'][$key]->tingkat_kelas }}
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                                <option value="VI">VI</option>
                                <option value="VII">VII</option>
                                <option value="VIII">VIII</option>
                                <option value="IX">IX</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Kelas</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nama_kelas"
                                value="{{ $data['kelas'][$key]->nama_kelas }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Wali Kelas</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" name="wali_id" required>
                                <option {{ $data['kelas'][$key]->wali_id == $data['kelas'][$key]->wali_id ? $data['kelas'][$key]->wali->name : ""}}
                                    value="{{ $data['kelas'][$key]->wali_id }}">{{ $data['kelas'][$key]->wali->name }}
                                @foreach ($data['wali_kelas'] as $key => $a)
                                    <option value="{{ $data['wali_kelas'][$key]->id }}">{{ $data['wali_kelas'][$key]->name }}</option>
                                @endforeach
                            </select>
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
