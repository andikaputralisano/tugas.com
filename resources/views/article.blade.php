<!DOCTYPE html>
<html>
<head>
    <title>Relasi One To Many Eloquent</title>
    <link href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}" rel="stylesheet">
    <link href="{{ asset('article.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('admin.sidebar')

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Eloquent One To Many Relationship</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">One To Many Relationship</li>
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
                                <div class="card-body">
                                    <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
                                    <h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Judul Artikel</th>
                                                <th>Tag</th>
                                                <th width="15%" class="text-center">Jumlah Tag</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($artikel as $a)
                                            <tr>
                                                <td>{{ $a->judul }}</td>
                                                <td>
                                                    @foreach($a->tags as $t)
                                                        {{ $t->tag }},
                                                    @endforeach
                                                </td>
                                                <td class="text-center">{{ $a->tags->count() }}</td>
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
