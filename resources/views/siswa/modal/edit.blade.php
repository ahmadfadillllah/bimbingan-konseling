<div class="modal fade" id="updateSiswa-{{ $s->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('siswa.update', $s->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">NIS Nasional</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nisn"
                                value="{{ $s->nisn }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Lengkap</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nama_lengkap"
                            value="{{ $s->nama_lengkap }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Kelas</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" id="kelass" name="kelas_id" required>
                                <option {{ $s->kelas_id == $s->kelas_id ? "$s->kelas->tingkat_kelas | $s->kelas->nama_kelas" : ""}} value="{{ $s->kelas_id }}">{{ $s->kelas->tingkat_kelas }} | {{ $s->kelas->nama_kelas }}</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->tingkat_kelas }} | {{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                            <input type="text" class="form-control input-rounded" id="walii_Id"
                                placeholder="Masukkan Alamat" name="wali_id" readonly hidden>

                    <div class="mb-3 col-md-12">
                        <label for="">Alamat</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="alamat"
                                value="{{ $s->alamat }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No. Handphone</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="no_hp"
                            value="{{ $s->no_hp }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Orang Tua</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="orang_tua"
                            value="{{ $s->orang_tua }}" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No. Handphone Orang Tua</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="no_hp_orang_tua"
                            value="{{ $s->no_hp_orang_tua }}" required>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#kelass").change(function(){
			var kelas_id = $(this).val()
			$.ajax({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
				url: "{{ route('siswa.show_data') }}",
				method: "GET",
				data: {kelas_id: kelas_id},
				success: function(data){
                    console.log(data);
					document.getElementById('walii_Id').value = data['wali_id'];
				}
			})
		})
	})
</script>
