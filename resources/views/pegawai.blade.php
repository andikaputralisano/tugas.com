<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Pegawai</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pegawai</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Pegawai</h3>
                                    <div class="card-tools">
                                        <a href="{{ route('tambah') }}" class="btn btn-primary">+ Tambah Pegawai Baru</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Cari Data Pegawai :</p>
                                    <form action="/pegawai/cari" method="GET">
                                        <input type="text" name="cari" placeholder="Cari Pegawai.." value="{{ old('cari') }}" class="form-control">
                                        <input type="submit" value="CARI" class="btn btn-success mt-2">
                                    </form>
                                    <table class="table table-bordered table-striped mt-3">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jabatan</th>
                                                <th>Umur</th>
                                                <th>Alamat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pegawai as $p)
                                            <tr>
                                                <td>{{ $p->pegawai_nama }}</td>
                                                <td>{{ $p->pegawai_jabatan }}</td>
                                                <td>{{ $p->pegawai_umur }}</td>
                                                <td>{{ $p->pegawai_alamat }}</td>
                                                <td>
                                                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                                                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="mt-4">
                                        Halaman : {{ $pegawai->currentPage() }} <br/>
                                        Jumlah Data : {{ $pegawai->total() }} <br/>
                                        Data Per Halaman : {{ $pegawai->perPage() }} <br/>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4">
                                        <div>
                                            {{ $pegawai->links() }}
                                        </div>
                                        <div>
                                            <a href="{{ $pegawai->nextPageUrl() }}" class="btn btn-primary">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
