<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Percetakan Adi Prima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Data Kwitansi</h1>
    <div class="container">
    <a href="/tambahkwitansi" type="button" class="btn btn-success">Tambah Data</a>
        <div class="row">
          @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          {{ $message }}
          </div>
          @endif
            <!-- Pemanggilan Table dari Bootstrap -->
    <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Kepada</th>
      <th scope="col">Bon/Faktur</th>
      <th scope="col">Banyak Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <!-- untuk Menampilkan data -->
    @foreach ($data as $row)
    <tr>
        <!-- untuk Pemanggilan data Tabel -->
      <th scope="row">{{ $row->id}}</th>
      <td>{{ $row->tanggal}}</td>
      <td>{{ $row->lokasi}}</td>
      <td>{{ $row->kepada}}</td>
      <td>{{ $row->bon_faktur}}</td>
      <td>{{ $row->banyak_barang}}</td>
      <td>{{ $row->jenis_barang}}</td>
      <td>{{ $row->nama_barang}}</td>
      <td>{{ $row->harga}}</td>
      <td>{{ $row->jumlah}}</td>
      <td>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-info">Info</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>