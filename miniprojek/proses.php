<?php
// Inisialisasi variabel
$data = null;
$error = [];

// Proses form saat metode pengiriman adalah POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    // Validasi Server-Side
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }
    
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }
    
    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    // Jika tidak ada error, simpan data ke dalam array $data
    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}

// Sertakan kembali tampilan form agar variabel $error dan $data bisa dibaca di form.php
include 'form.php';
?>