@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Kontak</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>Nama</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>No. Handphone</strong></th>
                                        <th><strong>Subject</strong></th>
                                        <th><strong>Pesan</strong></th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kontak as $k)
                                    <tr>
                                        <td><strong>{{ $loop->iteration }}</strong></td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k->email }}</td>
                                        <td>{{ $k->no_hp }}</td>
                                        <td>{{ $k->subject }}</td>
                                        <td>{{ $k->pesan }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#destroyKontak-{{ $k->id }}">Hapus</button>
                                                @include('kontak.modal.destroy')
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
