@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Batas Poin</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('bataspoin.update') }}" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Nama Sekolah</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="nama" value="{{ $batas->nama }}" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Tentukan Poin</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="poin" value="{{ $batas->poin }}" required>
                                    </div>
                                </div>
                                <p style="color: red">Catatan: apabila pelanggaran siswa melebihi batas poin, maka tombol cetak surat akan muncul</p>
                                <div class="mb-3 row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
