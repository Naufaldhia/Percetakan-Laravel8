let savedTanggal = null; // Variabel untuk menyimpan tanggal pertama kali diinput

// Menangani form submission
document
  .getElementById("dataFormisi")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Ambil nilai input dari form
    let tanggal = document.getElementById("tanggalisi").value;

    // Jika savedTanggal belum ada dan tanggal diisi, simpan tanggal pertama kali diinput
    if (!savedTanggal && tanggal) {
      savedTanggal = tanggal;
    }

    // Jika tanggal kosong pada entri berikutnya, gunakan savedTanggal
    if (!tanggal) {
      tanggal = savedTanggal;
    }

    const kepada = document.getElementById("kepadaisi").value;
    const fakturBon = document.getElementById("fakturBonisi").value;
    const namaBarang = document.getElementById("namaBarangisi").value;
    const banyakBarang = document.getElementById("banyakBarangisi").value;
    const jenisBarang = document.getElementById("jenisBarangisi").value;
    const harga = document.getElementById("hargaisi").value;

    // Tambahkan data ke tabel
    addToTable(
      tanggal, // pastikan tanggal masuk sebagai data pertama
      fakturBon,
      namaBarang,
      banyakBarang,
      jenisBarang,
      harga,
      "Belum"
    );

    // Kosongkan form kecuali tanggal
    document.getElementById("kepadaisi").value = "";
    document.getElementById("fakturBonisi").value = "";
    document.getElementById("namaBarangisi").value = "";
    document.getElementById("banyakBarangisi").value = "";
    document.getElementById("jenisBarangisi").value = "Lembar";
    document.getElementById("hargaisi").value = "";
  });

// Fungsi untuk menambahkan data ke tabel
function addToTable(
  tanggal,
  fakturBon,
  namaBarang,
  banyakBarang,
  jenisBarang,
  harga,
  status
) {
  const table = document
    .getElementById("dataTableisi")
    .getElementsByTagName("tbody")[0];
  const newRow = table.insertRow();

  const cell1 = newRow.insertCell(0); // Tanggal
  const cell2 = newRow.insertCell(1); // Faktur/Bon
  const cell3 = newRow.insertCell(2); // Banyak Barang
  const cell4 = newRow.insertCell(3); // Nama Barang
  const cell5 = newRow.insertCell(4); // Harga
  const cell6 = newRow.insertCell(5); // Jumlah
  const cell7 = newRow.insertCell(6); // Status
  const cell8 = newRow.insertCell(7); // Action

  // Hitung jumlah total berdasarkan banyak barang
  const totalBanyakBarang = parseInt(banyakBarang); // pastikan konversi ke integer
  const jumlah = totalBanyakBarang * parseInt(harga);

  // Masukkan nilai-nilai ke dalam tabel
  cell1.innerHTML = tanggal;
  cell2.innerHTML = fakturBon;
  cell3.innerHTML = `${banyakBarang} (${jenisBarang})`;
  cell4.innerHTML = namaBarang;
  cell5.innerHTML = `Rp ${parseInt(harga).toLocaleString()}`;
  cell6.innerHTML = `Rp ${parseInt(jumlah).toLocaleString()}`;
  cell7.innerHTML = `<span class="status-belum">${status}</span>`;
  cell8.innerHTML = `<button class="action-btn" onclick="markAsDone(this)">Selesai</button>`;
}

// Fungsi untuk menghitung total harga
function hitungTotalHarga() {
  const table = document
    .getElementById("dataTableisi")
    .getElementsByTagName("tbody")[0];
  let totalHarga = 0;

  // Iterasi setiap baris di tabel untuk mengambil harga
  for (let i = 0; i < table.rows.length; i++) {
    const hargaText = table.rows[i].cells[5].innerText // Mengambil kolom "Jumlah"
      .replace("Rp ", "")
      .replace(/\./g, ""); // Hapus titik pemisah ribuan
    const harga = parseInt(hargaText); // Ubah ke integer
    totalHarga += harga; // Tambahkan ke total
  }

  // Tampilkan total harga di paragraf
  document.getElementById(
    "totalHargaisi"
  ).innerText = `Rp ${totalHarga.toLocaleString()}`;
}

// Fungsi untuk mengubah status menjadi "Selesai"
function markAsDone(button) {
  const row = button.parentNode.parentNode;
  const statusCell = row.cells[6];
  statusCell.innerHTML = `<span class="status-selesai">Selesai</span>`;
  button.remove(); // Hapus tombol setelah status diubah
}
