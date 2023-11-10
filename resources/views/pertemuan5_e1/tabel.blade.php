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
 
  <table class="table table-sm table-hover table-bordered table-danger">
    <thead>
      <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th colspan="2">TTL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>123</td>
        <td>Jono</td>
        <td>Laki-Laki</td>
        <td>20-09-2000</td>
        <td rowspan="3">Sorong</td>
      </tr>
      <tr>
        <td>124</td>
        <td>Joni</td>
        <td>Laki-Laki</td>
        <td>20-09-2000</td>
        {{-- <td>Sorong</td> --}}
      </tr>
      <tr>
        <td>125</td>
        <td>Jona</td>
        <td>Laki-Laki</td>
        <td>20-09-2000</td>
        {{-- <td>Sorong</td> --}}
      </tr>
    </tbody>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>