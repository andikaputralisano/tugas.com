<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai 2</title>
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
                            <h1>Data Pegawai 2</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pegawai 2</li>
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
                                    <h3 class="card-title">Data Pegawai 2</h3>
                                    <div class="card-tools">
                                        <a href="{{ route('pegawai2_tambah') }}" class="btn btn-primary">+ Tambah Pegawai Baru</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p>Cari Data Pegawai:</p>
                                    <form action="/pegawai2/cari" method="GET">
                                        <input type="text" name="cari" placeholder="Cari Pegawai.." value="{{ old('cari') }}" class="form-control">
                                        <input type="submit" value="CARI" class="btn btn-success mt-2">
                                    </form>
                                    <table class="table table-bordered table-striped mt-3">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pegawai2 as $p2)
                                            <tr>
                                                <td>{{ $p2->nama }}</td>
                                                <td>{{ $p2->alamat }}</td>
                                                <td>
                                                    <a href="/pegawai2/edit/{{ $p2->id }}" class="btn btn-warning">Edit</a>
                                                    <a href="/pegawai2/hapus/{{ $p2->id }}" class="btn btn-danger">Hapus</a>
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
            </section>
        </div>
    </div>
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
