<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tabel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <h1>Ini adalah halaman Tabel</h1>

  <table class="table table-sm table-bordered table-hover table-danger text-center">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama Mahasiswa</th>
        <th colspan="2">TTL</th>
        <th>Jenis Kelamin</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123</td>
        <td>Jono</td>
        <td>19-09-2000</td>
        <td rowspan="3">Marendal</td>
        <td>Laki-Laki</td>
      </tr>
      <tr>
        <td>124</td>
        <td>Joni</td>
        <td>19-09-2000</td>
        {{-- <td>Marendal</td> --}}
        <td>Laki-Laki</td>
      </tr>
      <tr>
        <td>125</td>
        <td>Jonu</td>
        <td>19-09-2000</td>
        {{-- <td>Marendal</td> --}}
        <td>Laki-Laki</td>
      </tr>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>