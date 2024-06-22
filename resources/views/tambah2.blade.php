<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}" rel="stylesheet">
        <title>CRUD Eloquent Laravel - Tambah Data</title>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('admin.sidebar')

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Tambah Data Pegawai</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="/pegawai2">Data Pegawai</a></li>
                                    <li class="breadcrumb-item active">Tambah Data</li>
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
                                        <h3 class="card-title">CRUD Data Pegawai – <strong>TAMBAH DATA</strong></h3>
                                        <div class="card-tools">
                                            <a href="/pegawai2" class="btn btn-primary">Kembali</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="/pegawai/store">
                                            {{ csrf_field() }}

                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama pegawai ..">
                                                @if($errors->has('nama'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('nama')}}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."></textarea>
                                                @if($errors->has('alamat'))
                                                    <div class="text-danger">
                                                        {{ $errors->first('alamat')}}
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" value="Simpan">
                                            </div>
                                        </form>
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
