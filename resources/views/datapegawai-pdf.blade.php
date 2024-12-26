<!DOCTYPE html>
<html>

<head>
    <style>
        .judul {
            text-align: center;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1 class="judul">Tabel Data Percetakan</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Kepada</th>
            <th>Bon/Faktur</th>
            <th>Banyak Barang</th>
            <th>Jenis Barang</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
        @php
            $no = 1;
        @endphp
        @foreach ($data as $row)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $row->tanggal }}</td>
                <td>{{ $row->lokasi }}</td>
                <td>{{ $row->kepada }}</td>
                <td>{{ $row->bon_faktur }}</td>
                <td>{{ $row->banyak_barang }}</td>
                <td>{{ $row->jenis_barang }}</td>
                <td>{{ $row->nama_barang }}</td>
                <td>{{ $row->harga }}</td>
                <td>{{ $row->jumlah }}</td>
            </tr>
        @endforeach
    </table>

</body>

</html>
