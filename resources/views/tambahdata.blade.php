<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Percetakan Adi Prima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Kwitansi</h1>
    <div class="container">

        <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
          <div class="card-body">
          <form action="/insertdata" method="POST" enctype="multipart/form-data">
            <!--@csrf digunakan untuk mengakses dan bersifat wajib  -->
          @csrf
            <div class="mb-3">
              <!-- name="tanggal" untuk memasukkan ke database -->
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Kepada</label>
            <input type="text" name="kepada" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Bon/Faktur</label>
            <input type="text" name="bon_faktur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Banyak Barang</label>
            <input type="text" name="banyak_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jenis Barang</label>
            <select class="form-select" name="jenis_barang" aria-label="Default select example">
  <option selected>Pilih Jenis Barang</option>
  <option value="1">Lembar</option>
  <option value="2">Rim</option>
</select>
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

          <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>