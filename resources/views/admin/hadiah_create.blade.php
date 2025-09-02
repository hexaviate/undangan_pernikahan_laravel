<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('hadiah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="no_rekening1" placeholder="no_rekening1">
        <input type="text" name="no_rekening2" placeholder="no_rekening2">
        <input type="text" name="nama_bank1" placeholder="nama_bank1">
        <input type="text" name="nama_bank2" placeholder="nama_bank2">
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
