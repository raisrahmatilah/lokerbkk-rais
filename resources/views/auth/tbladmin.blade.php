{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tabel Data Admin</h2>
        <div class="text-end mb-3">
            <a href="/addperusahaan"  class="btn btn-primary">Tambah Data</a>
        </div>

        <table class="table table-bordered">
            <caption>Data Admin</caption>
            <thead>
                <tr>
                    <th class="text-center">ID Admin</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Jabatan</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Kontak</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataAdmin as $dataAdmin)
                <tr>
                    <td class="text-center">{{ $dataAdmin->id_admin }}</td>
                    <td class="text-center">{{ $dataAdmin->nama }}</td>
                    <td class="text-center">{{ $dataAdmin->jabatan }}</td>
                    <td class="text-center">{{ $dataAdmin->alamat }}</td>
                    <td class="text-center">{{ $dataAdmin->kontak }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<a href='/logout'>Logout</a> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tabel Data Admin</h2>
        <div class="text-end mb-3">
            <a href="/addadmin"  class="btn btn-primary">Tambah Data</a>
            <a href="/admin/user"  class="btn btn-primary">Kembali</a>
        </div>

        <table class="table table-bordered">
            <caption>Data Admin</caption>
            <thead>
                <tr>
                    <th class="text-center">ID Admin</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Email</th>
                    {{-- <th class="text-center">Password</th> --}}
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Kontak</th>
                    {{-- <th class="text-center">Role</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($userData as $user)
                <tr>
                    <td class="text-center">{{ $user->id}}</td>
                    <td class="text-center">{{ $user->name}}</td>
                    <td class="text-center">{{ $user->email }}</td>
                    {{-- <td class="text-center">{{ $user->password }}</td> --}}
                    <td class="text-center">{{ $user->alamat }}</td>
                    <td class="text-center">{{ $user->kontak }}</td>
                    {{-- <td class="text-center">{{ $user->role }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<a href='/logout'>Logout</a>
