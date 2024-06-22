<!DOCTYPE html>
<html>
<head>
    <title>Edit data pegawai</title>
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
                        <h1>Edit Pegawai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/pegawai">Kembali</a></li>
                            <li class="breadcrumb-item active">Edit Pegawai</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @foreach($pegawai as $p)
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Pegawai</h3>
                            </div>
                            <form action="/pegawai/update" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" name="nama" required="required" value="{{ $p->pegawai_nama }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" id="jabatan" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="number" id="umur" name="umur" required="required" value="{{ $p->pegawai_umur }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea id="alamat" name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </div>
                            </form>
                        </div>
                        @endforeach
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
