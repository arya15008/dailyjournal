<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = md5(trim($_POST['password'])); // Menggunakan md5 sesuai keinginan Anda

    if (empty($username) || empty($_POST['password'])) {
        echo "Username dan password tidak boleh kosong.";
        exit();
    }

    // Query untuk memeriksa username dan password
    $query = "SELECT * FROM user_web WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);

    if ($stmt === false) {
        die("Query error: " . $conn->error); // Debug jika query salah
    }

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Jika ada user yang cocok, simpan username di session
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("location:admin.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Pantai Indonesia</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="icon" href="img/logo.png" />
  </head>
  <body class="p-3 mb-2 bg-dark text-white">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
          <div class="card border-0 shadow rounded-5">
            <div class="card-body">
              <div class="text-center mb-3">
                <i class="bi bi-person-circle h1 display-4"></i>
                <p>Welcome to my daily journal</p>
                <hr />
              </div>
              <form action="" method="post">
                <input
                  type="text"
                  name="username"
                  class="form-control my-4 py-2 rounded-4"
                  placeholder="Username"
                />
                <input
                  type="password"
                  name="password"
                  class="form-control my-4 py-2 rounded-4"
                  placeholder="Password"
                />
                <div class="text-center my-3 d-grid">
                  <button class="btn btn-danger rounded-4">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
