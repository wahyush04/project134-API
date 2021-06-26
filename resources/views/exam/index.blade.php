<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Abstrak</th>
            <th>#</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        @foreach($exams as $exam)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $exam->judul_43 }}</td>
                <td>{{ $exam->abstrak_43 }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger">Del</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
