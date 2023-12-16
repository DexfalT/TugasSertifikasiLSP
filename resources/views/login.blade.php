<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | PMB Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-image: url('/images/background.jpg'); /* Ganti dengan path sesuai struktur proyek Anda */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.5); /* Transparansi latar belakang card */
            border-radius: 10px;
            backdrop-filter: blur(10px); /* Ganti nilai sesuai kebutuhan */
            color: #333; /* Warna teks agar lebih terbaca */
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Login PMB Online</h2>
                    </div>
                    <div class="card-body">
                        <form action='login' method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        <p class="text-center">Belum punya akun? <a href='register')>Register disini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
</body>
</html>
