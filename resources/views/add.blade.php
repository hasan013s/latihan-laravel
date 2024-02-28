<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('post') }}" method="post">
    @csrf
        <label for="">Kegiatannya apa ini</label>
        <input type="text" name="kegiatan" id=""><br>

        <label for="">tanggal</label>
        <input type="date" name="tanggal" id=""><br>

        <label for="">waktu</label>
        <input type="time" name="waktu" id=""><br>

        <label for="">keterangan</label>
        <textarea name="keterangan" id="" cols="" rows=""></textarea><br>

        <label for="">status</label>
        <input type="text" name="status" id=""><br>


        <input type="submit" value="simpan">
    </form>
</body>
</html>