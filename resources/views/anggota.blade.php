<!DOCTYPE html>
<html>
<head>
    <title>Relasi Many To Many Eloquent</title>
    <link href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Eloquent Many To Many Relationship</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Many To Many Relationship</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
                            <h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Pengguna</th>
                                        <th>Hadiah</th>
                                        <th width="1%">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($anggota as $a)
                                    <tr>
                                        <td>{{ $a->nama }}</td>
                                        <td>
                                            <ul>
                                                @foreach($a->hadiahs as $h)
                                                <li> {{ $h->nama_hadiah }} </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-center">{{ $a->hadiahs->count() }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
