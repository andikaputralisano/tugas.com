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
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Umur</th>
                                                <th width="1%">OPSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($guru as $g)
                                            <tr>
                                                <td>{{ $g->nama }}</td>
                                                <td>{{ $g->umur }}</td>
                                                <td>
                                                    <a href="/guru/hapus/{{ $g->id }}" class="btn btn-danger btn-sm">Hapus</a>
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
