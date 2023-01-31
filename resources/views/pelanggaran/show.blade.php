@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-12 order-lg-1">
                                <h4 class="mb-3">Informasi Siswa</h4>
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">NISN</label>
                                            <input type="text" class="form-control" value="{{ $siswa->nisn }}" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName"  class="form-label">Nama</label>
                                            <input type="text" class="form-control" value="{{ $siswa->nama_lengkap }}" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">Kelas</label>
                                            <input type="text" class="form-control" value="{{ $siswa->kelas->tingkat_kelas }} | {{ $siswa->kelas->nama_kelas }}" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName"  class="form-label">Wali Murid</label>
                                            <input type="text" class="form-control" value="{{ $siswa->wali->name }}" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address"  class="form-label">No. Handphone</label>
                                        <input type="text" class="form-control" value="{{ $siswa->no_hp }}" readonly>
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName" class="form-label">Nama Orang Tua</label>
                                            <input type="text" class="form-control" value="{{ $siswa->orang_tua }}" readonly>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName"  class="form-label">No. HP Orang Tua</label>
                                            <input type="text" class="form-control" value="{{ $siswa->no_hp_orang_tua }}" readonly>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                </form>
                            </div>
                            <div class="col-lg-12 order-lg-2 mb-12">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Daftar Pelanggaran</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    @if ($detail_pelanggaran->isEmpty())
                                        <h5>Tidak mempunyai pelanggaran/pelanggaran telah dihapus</h5>
                                    @else
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($detail_pelanggaran as $dp)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">{{ $dp->kategori->nama }}</h6>
                                            <small class="text-muted">Dilaporkan Oleh : {{ $dp->dilaporkan_oleh }}</small>
                                            <br>
                                            <small class="text-muted">Catatan : {{ $dp->catatan }}</small>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#editPelanggaran{{ $dp->id }}"><i class="fas fa-pencil-alt"></i></button>
                                                @include('pelanggaran.modal.edit')
                                                <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#destroyPelanggaran{{ $dp->id }}"><i class="fa fa-trash"></i></button>
                                                @include('pelanggaran.modal.destroy')
                                            </div>
                                        </div>
                                        <span class="text-muted">{{ $dp->kategori->bobot }}</span>
                                    </li>
                                    @php
                                        $total += $dp->kategori->bobot;
                                    @endphp
                                    @endforeach
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Total Poin</span>
                                        <strong>
                                            {{ $total }}
                                        </strong>
                                    </li>
                                    @endif
                                </ul>
                                <hr class="mb-4">
                                    <button class="btn btn-warning btn-lg btn-block" type="button" data-bs-toggle="modal" data-bs-target="#insertPelanggaran">Tambah Pelanggaran</button>
                                    @include('pelanggaran.modal.insert')
                                    @if($total < $bobot->poin)
                                    @else
                                    <hr class="mb-4">
                                    <a href="{{ route('pelanggaran.download', $pelanggaran->id) }}" class="btn btn-info btn-lg btn-block">Cetak Surat Peringatan</a>
                                    @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
