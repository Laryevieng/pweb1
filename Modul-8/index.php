<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .jumbotron-bg {
            background-image: url('fkom.jpg'); /* URL gambar latar belakang */
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 1px 1px 2px black;
        }
    </style>
</head>
<body>
    <!-- Jumbotron Header -->
    <header class="jumbotron-bg text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">Tracer Alumni</h1>
            <p class="lead">Sistem sederhana untuk pelacakan alumni.</p>
        </div>
    </header>

    <div class="container-fluid my-4">
        <div class="row">
            <!-- Sidebar Menu -->
            <aside class="col-md-2">
                <nav class="nav flex-column bg-light p-3">
                    <a class="nav-link" href="?menu=form">Tambah Alumni</a>
                    <a class="nav-link" href="?menu=data">Lihat Data Alumni</a>
                </nav>
            </aside>

            <!-- Main Content -->
            <main class="col-md-10">
                <?php
                if (isset($_GET['menu'])) {
                    if ($_GET['menu'] == 'form') {
                        include 'alumni_form.php';
                    } elseif ($_GET['menu'] == 'data') {
                        include 'alumni_data.php';
                    }
                } else {
                    echo "<p>Selamat datang di sistem tracer alumni. Pilih menu di sebelah kiri untuk memulai.</p>";
                }
                ?>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Tracer Alumni. All rights reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>