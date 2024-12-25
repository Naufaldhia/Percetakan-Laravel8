<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Percetakan Adi Prima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <h1 class="text-center mb-4">Data Kwitansi</h1>
    <div class="container">
      <a href="/tambahkwitansi" type="button" class="btn btn-success">Tambah Data</a>
      <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
      <form action="/dashboard" method="GET">
      <input type="search" id="inputPassword6" name='search' class="form-control" aria-describedby="passwordHelpInline">
      </form>
    </div>
    <!-- Export PDF -->
    <div class="col-auto">
    <a href="/exportpdf" class="btn btn-info">Export PDF</a>
    </div>
    <!-- Export Excel -->
    <div class="col-auto">
    <a href="/exportexcel" class="btn btn-success">Export Excel</a>
    </div>
  </div>
      
        <div class="row">
          <!-- @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
          {{ $message }}
          </div>
          @endif -->
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
    @php
      $no = 1;
    @endphp
    <!-- untuk Menampilkan data -->
    @foreach ($data as $index => $row)
    <tr>
        <!-- no++ itu untuk @php supaya bertambah satu -->
        <!-- untuk Pemanggilan data Tabel -->
         <!-- $data FirstItem untuk mengurutkan item sesuai nomor -->
      <th scope="row">{{ $index + $data->firstItem() }}</th>
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
      <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Info</a>
      <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}" data-kepada="{{ $row->kepada }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- untuk Pilihan Item -->
{{ $data->links() }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
  <!-- untuk tombol notif di delete -->
  <script>
  $('.delete').click( function(){
  var percetakanid = $(this).attr('data-id');
  var kepada = $(this).attr('data-kepada');
  Swal.fire({
  title: "Yakin ?",
  text: "Kamu akan menghapus data percetakan dengan nama "+kepada,
  icon: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes, delete it!"
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "/delete/"+percetakanid
    Swal.fire({
      title: "Deleted!",
      text: "Data berhasil di hapus",
      icon: "success"
    });
  }
});
});


    
  </script>

  <script>
    // Untuk Memunculkan notif di pengaturanController
  @if (Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
  @endif
  </script>
</html>