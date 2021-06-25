<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<table border="1" width="50%" align="center">
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->description }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
