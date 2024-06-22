<!DOCTYPE html>
<html>
<head>
    <title>Soft Deletes Laravel - Data Guru</title>
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
                            <h1>Data Guru</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Guru</li>
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
                                    <h3 class="card-title">Data Guru | <a href="https://www.malasngoding.com/laravel" target="_blank">www.malasngoding.com</a></h3>
                                    <div class="card-tools">
                                        <a href="/guru" class="btn btn-primary btn-sm">Data Guru</a>
                                        <a href="/guru/trash" class="btn btn-secondary btn-sm">Tong Sampah</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="/guru/kembalikan_semua" class="btn btn-success btn-sm">Kembalikan Semua</a>
                                    <a href="/guru/hapus_permanen_semua" class="btn btn-danger btn-sm">Hapus Permanen Semua</a>
                                    <br/><br/>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th width="30%">OPSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($guru as $g)
                                            <tr>
                                                <td>{{ $g->nama }}</td>
                                                <td>{{ $g->umur }}</td>
                                                <td>
                                                    <a href="/guru/kembalikan/{{ $g->id }}" class="btn btn-success btn-sm">Restore</a>
                                                    <a href="/guru/hapus_permanen/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus Permanen</a>
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
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
