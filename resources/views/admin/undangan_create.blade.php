<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('undangan.store') }}" method="POST">
        @csrf
        <input type="text" name="slug" placeholder="Masukkan Slug">
<<<<<<< HEAD
=======
        <input type="text" name="nama_keluarga1" placeholder="Masukkan nama Keluarga 1">
        <input type="text" name="nama_keluarga2" placeholder="Masukkan nama Keluarga 2">
        <input type="file" name="cover" placeholder="Masukkan cover">

>>>>>>> dfaa9745020f06af0d4a1b2b976363d036e4b76c
        <select name="active" id="">
            <option value="yes">Y</option>
            <option value="no">n</option>
        </select>
        <input type="submit">
    </form>
</body>

</html>
