# Lab7Web_PHP
LAPORAN PRAKTIKUM 7: PEMROGRAMAN SERVER-SIDE DENGAN PHP
Mata Kuliah Pemrograman Web | Repository: Lab7Web_PHP

A. Langkah Kerja Praktikum dan Cara Kerja Program

Latihan 1: Menjalankan PHP
• Penjelasan: Menjalankan skrip PHP sederhana pada server lokal menggunakan tag  dan fungsi date() untuk menampilkan waktu server.
• Cara Kerja: Saat halaman diakses via http://localhost/Lab7Web_PHP/latihan1.php, server Apache memproses skrip PHP terlebih dahulu dan mengembalikan teks hasil eksekusi ke browser dalam bentuk HTML biasa.

Latihan 2: Variabel, Operator, dan Percabangan
• Penjelasan: Menggunakan variabel untuk menyimpan data nilai tugas, UTS, dan UAS, kemudian menghitung nilai akhir dengan bobot persentase serta menentukan predikat menggunakan struktur if-elseif-else.
• Cara Kerja: Program mengkalkulasi variabel nilai, menentukan predikat berdasarkan logika percabangan, dan mencetak hasilnya ke browser menggunakan fungsi htmlspecialchars() dan number_format().

Latihan 3: Perulangan dan Array
• Penjelasan: Menyimpan daftar nama mahasiswa dalam variabel array dan menampilkannya sebagai elemen daftar berurutan () menggunakan perulangan foreach.
• Cara Kerja: Skrip membaca setiap elemen di dalam array mahasiswa satu per satu secara berurutan dari indeks pertama hingga terakhir, lalu mencetaknya ke dalam tag .

Latihan 4: Membuat Function
• Penjelasan: Dibuat fungsi terpisah hitungDiskon() untuk menghitung harga setelah potongan dan fungsi cekKelulusan() untuk memverifikasi batas nilai lulus.
• Cara Kerja: Pemanggilan fungsi mengirimkan argumen harga dan persen, memproses kalkulasi di dalam fungsi, lalu mengembalikan nilai (return) yang siap ditampilkan di halaman.

Latihan 5: Memproses Form dengan GET
• Penjelasan: Mengirimkan data dari input teks formulir pencarian menggunakan metode HTTP GET.
• Cara Kerja: Saat tombol 'Cari' diklik, input dikirimkan melalui URL parameter (contoh: ?kata=pemrograman). Skrip memeriksa ketersediaan parameter via $_GET['kata'] dan menampilkan kata kunci pencarian.

Latihan 6: Memproses Form dengan POST
• Penjelasan: Mengirimkan data formulir input nama dan program studi secara tersembunyi menggunakan metode HTTP POST.
• Cara Kerja: Saat formulir dikirim, $_SERVER["REQUEST_METHOD"] memeriksa tipe permintaan. Jika berjenis POST, data $_POST ditangkap, divalidasi tidak boleh kosong, lalu ditampilkan secara aman dengan htmlspecialchars().

Latihan 7: Pengolahan Data Sederhana
• Penjelasan: Memproses input nama barang, harga, dan jumlah untuk menghitung subtotal transaksi belanja.
• Cara Kerja: Server menerima data via POST, memeriksa validasi tipe angka (is_numeric & ctype_digit) serta memastikan jumlah bernilai positif. Jika valid, subtotal dikalkulasi dan ditampilkan.

Mini Project: Aplikasi Formulir Data Mahasiswa
• Penjelasan: Mengembangkan aplikasi formulir pengisian data mahasiswa (Nama, NIM, Prodi, Semester, dan Email) yang dilengkapi validasi server-side lengkap dan sanitasi output.
• Cara Kerja: Data dikirim via POST. Logika server-side mengecek kelengkapan kolom, validasi format email dengan filter_var(), dan memastikan rentang semester 1–14. Jika ditemukan kesalahan, daftar error ditampilkan; jika valid, ringkasan data mahasiswa akan dicetak.
