<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Pengaduan</title>
</head>
<body>
    <h1>Pengaduan</h1>
    <form action="{{ route('pengaduan.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nik">NIK</label><br>
        <input type="text" name="nik" id="nik"><br>
        @error('nik')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <label for="isi_laporan">Laporan</label><br>
        <input type="text" name="isi_laporan" id="isi_laporan"><br>
        @error('isi_laporan')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <label for="foto">Foto</label><br>
        <input type="file" name="foto" id="foto"><br>
        @error('foto')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        
        <br>
        <label for="status">Status</label><br>
        <!-- <input type="text" name="status" id="status"><br> -->
        <select name="status" id="status">
            <option value="0">Belum diproses</option>
            <option value="proses">Sedang diproses</option>
            <option value="selesai">Selesai</option>
        </select><br>
        @error('status')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="Ajukan Pengaduan">
    </form>
</body>
</html>