<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('mempelaiL.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama" placeholder="nama">
        <input type="text" name="nama_panggilan" placeholder="nama_panggilan">
        <input type="text" name="nama_bapak" placeholder="nama_bapak">
        <input type="text" name="nama_ibu" placeholder="nama_ibu">
        <input type="text" name="alamat" placeholder="alamat">
        <input type="file" name="foto" placeholder="Masukkan foto">
        <select name="isi_undangan_id" id="">
            @foreach ($isiUndangan as $item)
                <option selected disabled>Pilih isiUndangan</option>
                <option value="{{ $item->id }}">
                    {{ $item->undangan->slug }}
                </option>
            @endforeach
        </select>
        <input type="submit">
    </form>

    <ul>
        <li>
            <a href="{{ route('cerita.index') }}">Kisah Cinta</a>
            <a href="{{ route('galeri.index') }}">Galeri</a>
            <a href="{{ route('hadiah.index') }}">hadiah</a>
            <a href="{{ route('mempelaiL.index') }}">Mempelai Laki</a>
            <a href="{{ route('mempelaiP.index') }}">Mempelai Perempuan</a>
            <a href="{{ route('waktuDanTempat.index') }}">waktu dan tempat</a>
        </li>
    </ul>
</body>

</html>
