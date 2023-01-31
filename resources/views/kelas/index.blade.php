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
                        <h4 class="card-title">Daftar Kelas</h4>
                        <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal" data-bs-target="#insertKelas"><span
                            class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                        </span>Tambah</button>
                        @include('kelas.modal.insert')
                    </div>
                    <div class="card-body">
                        <span>Silahkan menambahkan siswa agar kelas muncul (Kelas tidak akan muncul jika didalam kelas tesebut belum ada siswa)</span>
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tingkat Kelas</th>
                                        <th>Nama Kelas</th>
                                        <th>Wali</th>
                                        <th>Total Siswa</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data['jumlah_siswa'] as $key => $a)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data['kelas'][$key]->tingkat_kelas }}</td>
                                        <td>{{ $data['kelas'][$key]->nama_kelas }}</td>
                                        <td>{{ $data['kelas'][$key]->wali->name }}</td>
                                        <td class="text-center">{{ $data['jumlah_siswa'][$key]->total }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <button type="button" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target="#updateKelas-{{ $data['kelas'][$key]->id }}"><i class="fas fa-pencil-alt"></i></button>
                                                @include('kelas.modal.edit')
                                                <button type="button" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal" data-bs-target="#destroyKelas-{{ $data['kelas'][$key]->id }}"><i class="fa fa-trash"></i></button>
                                                @include('kelas.modal.destroy')
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
