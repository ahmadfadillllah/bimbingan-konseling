<div class="modal fade" id="insertSiswa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form action="{{ route('siswa.insert') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3 col-md-12">
                        <label for="">NIS Nasional</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nisn"
                                placeholder="Masukkan NISN" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Lengkap</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="nama_lengkap"
                                placeholder="Masukkan Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Kelas</label>
                        <div class="mb-3">
                            <select class="default-select form-control wide mb-3" id="daftarkelas" name="kelas_id" required>
                                <option value="">Pilih kelas</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}">{{ $k->tingkat_kelas }} | {{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                            <input type="text" class="form-control input-rounded" id="waliuntukelas_id"
                                placeholder="Masukkan Alamat" name="wali_id" readonly hidden>
                    <div class="mb-3 col-md-12">
                        <label for="">Alamat</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="alamat"
                                placeholder="Masukkan Alamat" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No. Handphone</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="no_hp"
                                placeholder="Masukkan No. Handphone" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">Nama Orang Tua</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="orang_tua"
                                placeholder="Masukkan Salah Satu Nama Orang Tua" required>
                        </div>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="">No. Handphone Orang Tua</label>
                        <div class="mb-3">
                            <input type="text" class="form-control input-rounded" name="no_hp_orang_tua"
                                placeholder="Masukkan No. Handphone Orang Tua" required>
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
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
	$(document).ready(function(){
		$("#daftarkelas").change(function(){
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
					document.getElementById('waliuntukelas_id').value = data['wali_id'];
				}
			})
		})
	})
</script>
