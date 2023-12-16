<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tabel Data Perusahaan</h2>
        <div class="text-end mb-3">
            <a href="/addperusahaan"  class="btn btn-primary">Tambah Data</a>
        </div>

        <table class="table table-bordered">
            <caption>Data Perusahaan</caption>
            <thead>
                <tr>
                    <th class="text-center">ID Perusahaan</th>
                    <th class="text-center">Nama Perusahaan</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Kontak</th>
                </tr>
            </thead>
            <tbody>
                @foreach($perusahaan as $dataPerusahaan)
                <tr>
                    <td class="text-center">{{ $dataPerusahaan->id }}</td>
                    <td class="text-center">{{ $dataPerusahaan->nama_perusahaan }}</td>
                    <td class="text-center">{{ $dataPerusahaan->alamat }}</td>
                    <td class="text-center">{{ $dataPerusahaan->kontak }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
