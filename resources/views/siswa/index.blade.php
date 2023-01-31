@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Siswa</h4>
                        <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#insertSiswa"><span
                            class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                        </span>Tambah</button>
                        @include('siswa.modal.insert')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>NISN</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>Wali Murid</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $s)
                                    <tr>
                                        <td>{{ $s->nisn }}</td>
                                        <td>{{ $s->nama_lengkap }}</td>
                                        <td>{{ $s->kelas->tingkat_kelas }} {{ $s->kelas->nama_kelas }}</td>
                                        <td>{{ $s->alamat }}</td>
                                        <td>{{ $s->wali->name }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateSiswa-{{ $s->id }}"><i class="fas fa-pencil-alt"></i></button>
                                                @include('siswa.modal.edit')
                                                <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#destroySiswa-{{ $s->id }}"><i class="fa fa-trash"></i></button>
                                                @include('siswa.modal.destroy')
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
