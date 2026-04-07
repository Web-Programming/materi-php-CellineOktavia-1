<?php
$nama='';
$email='';
$pesan='';

$postErrors =[];
$postSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nama=trim($_POST['nama'] ?? '');
    $email=trim($_POST['email']??'');
    $pesan=trim($_POST['pesan']??'');
    
    //Validasi Sederhana
    if($nama === ''){
        $postErrors[] = 'Nama wajib diisi';
    }
    if($email === ''){
        $postErrors[] = 'Email wajib diisi';
    }
    if($pesan === ''){
        $postErrors[] = 'Pesan wajib diisi';
    }
    if(empty($postErrors)){
        $postSuccess = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Contoh Proses Form POST</h2>
    <?php if(!empty($postErrors)): ?>
        <div class="error">
            <strong>Validasi gagal:</strong>
            <ul>
                <?php foreach ($postErrors as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if($postSuccess): ?>
        <div class="success">Data berhasil dikirim dengan method POST</div>
        <div class="result"><br>
            Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?><br>
            Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?><br>
            Pesan: <?= nl2br(htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')) ?><br>
        </div>
    <?php endif; ?>
    <a href="index2.php">Kembali ke Form</a>
</body>
</html>