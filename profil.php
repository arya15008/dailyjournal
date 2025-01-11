<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Profil Pengguna</h1>
        <form method="post" action="update_profile.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="password" class="form-label">Ganti Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja">
            </div>
            <div class="mb-3">
                <label for="profile_pic" class="form-label">Ganti Foto Profil</label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic">
            </div>
            <div class="mb-3">
                <label for="current_pic" class="form-label">Foto Profil Saat Ini</label><br>
                <?php
                include "koneksi.php";
                session_start();
                $user_id = $_SESSION['user_id'];
                $sql = "SELECT profile_pic FROM users WHERE id='$user_id'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                if ($row['profile_pic'] && file_exists('img/' . $row['profile_pic'])) {
                    echo "<img src='img/" . $row['profile_pic'] . "' width='100'>";
                } else {
                    echo "<p>Foto profil belum diunggah.</p>";
                }
                ?>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
