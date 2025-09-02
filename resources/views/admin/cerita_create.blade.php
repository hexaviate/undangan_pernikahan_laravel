<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('cerita.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="video" placeholder="Masukkan Slug">
        <input type="text" name="cerita1" placeholder="cerita1">
        <input type="text" name="cerita2" placeholder="cerita2">
        <input type="text" name="cerita3" placeholder="cerita3">
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
