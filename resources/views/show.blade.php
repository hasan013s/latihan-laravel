<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #dddddd;
            background-color: #4caf50;
            color: white;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <a href="{{ route('add') }}"><button>Tambahkan data baru </button></a><br>
    <table>
        <tr>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->kegiatan }}</td>
            <td>{{ $row->tanggal }}</td>
            <td>{{ $row->waktu }}</td>
            <td>{{ $row->keterangan}}</td>
            <td>{{ $row->status}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
