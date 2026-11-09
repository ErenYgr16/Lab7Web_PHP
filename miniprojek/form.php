<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f4f4f9; }
        .container { max-width: 500px; background: #ffffff; padding: 20px 25px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin: 0 auto; }
        h2, h3 { margin-top: 0; color: #333; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="text"], input[type="email"], input[type="number"] { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        button { background-color: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        .alert-danger { background-color: #f8d7da; color: #721c24; padding: 10px 15px; border: 1px solid #f5c6cb; border-radius: 4px; margin-bottom: 20px; }
        .alert-danger ul { margin: 0; padding-left: 20px; }
        .result-box { background-color: #e2e3e5; padding: 15px; border-radius: 4px; border-left: 5px solid #28a745; margin-top: 20px; }
        .result-box p { margin: 5px 0; }
    </style>
</head>
<body>

<div class="container">
    <h2>Formulir Data Mahasiswa</h2>

    <!-- Tampilkan Pesan Error (jika ada data $error dari proses.php) -->
    <?php if (!empty($error)): ?>
        <div class="alert-danger">
            <strong>Terjadi kesalahan:</strong>
            <ul>
                <?php foreach ($error as $err): ?>
                    <li><?= htmlspecialchars($err, ENT_QUOTES, "UTF-8") ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Form diarahkan ke proses.php -->
    <form method="POST" action="proses.php">
        <div class="form-group">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" value="<?= htmlspecialchars($_POST['nama'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <div class="form-group">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" value="<?= htmlspecialchars($_POST['nim'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <div class="form-group">
            <label for="prodi">Program Studi:</label>
            <input type="text" id="prodi" name="prodi" value="<?= htmlspecialchars($_POST['prodi'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <div class="form-group">
            <label for="semester">Semester (1-14):</label>
            <input type="number" id="semester" name="semester" min="1" max="14" value="<?= htmlspecialchars($_POST['semester'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <button type="submit">Kirim Data</button>
    </form>

    <!-- Tampilkan Ringkasan Data (jika variabel $data berhasil diisi) -->
    <?php if (isset($data) && $data !== null): ?>
        <div class="result-box">
            <h3>Ringkasan Data Mahasiswa</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Semester:</strong> <?= htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8") ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") ?></p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>