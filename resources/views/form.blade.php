<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pendaftaran | PMB Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-image: url('/images/background.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            color: #333;
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Formulir Pendaftaran PMB Online</h2>
                    </div>
                    <div class="card-body">
                        <form action="submit_form" method="POST">
                            @csrf
                            <!-- Data Pribadi -->
                            <h4>Data Pribadi</h4>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap (sesuai ijazah disertai gelar):</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <!-- Alamat KTP -->
                            <h4>Alamat KTP</h4>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap Saat Ini:</label>
                                <textarea name="alamat" class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan:</label>
                                <input type="text" name="kecamatan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="kabupaten" class="form-label">Kabupaten:</label>
                                <input type="text" name="kabupaten" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="propinsi" class="form-label">Propinsi:</label>
                                <input type="text" name="propinsi" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_telepon" class="form-label">Nomor Telepon:</label>
                                <input type="tel" name="nomor_telepon" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomor_hp" class="form-label">Nomor HP:</label>
                                <input type="tel" name="nomor_hp" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <!-- Kewarganegaraan -->
                            <h4>Kewarganegaraan</h4>
                            <div class="mb-3">
                                <label>Jenis Kewarganegaraan:</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="wni_asli" required>
                                    <label class="form-check-label">WNI Asli</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="wni_keturunan" required>
                                    <label class="form-check-label">WNI Keturunan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="kewarganegaraan" value="wna" required>
                                    <label class="form-check-label">WNA</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="negara_wna" class="form-label">Negara (jika WNA):</label>
                                <input type="text" name="negara_wna" class="form-control" disabled>
                            </div>
                            <!-- Tanggal Lahir -->
                            <h4>Tanggal Lahir</h4>
                            <div class="mb-3">
                                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                                <input type="date" name="tanggal_lahir" class="form-control" required>
                            </div>
                            <!-- Tempat Lahir -->
                            <h4>Tempat Lahir</h4>
                            <div class="mb-3">
                                <label for="kota_lahir" class="form-label">Kota / Kabupaten:</label>
                                <input type="text" name="kota_lahir" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="propinsi_lahir" class="form-label">Propinsi:</label>
                                <input type="text" name="propinsi_lahir" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="negara_lahir" class="form-label">Negara (jika dilahirkan di luar negeri):</label>
                                <input type="text" name="negara_lahir" class="form-control" required>
                            </div>
                            <!-- Jenis Kelamin -->
                            <h4>Jenis Kelamin</h4>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" required>
                                    <label class="form-check-label">Pria</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita" required>
                                    <label class="form-check-label">Wanita</label>
                                </div>
                            </div>
                            <!-- Status Menikah -->
                            <h4>Status Menikah</h4>
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menikah" value="belum_menikah" required>
                                    <label class="form-check-label">Belum Menikah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menikah" value="menikah" required>
                                    <label class="form-check-label">Menikah</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_menikah" value="lainnya" required>
                                    <label class="form-check-label">Lainnya (janda/duda)</label>
                                </div>
                            </div>
                            <!-- Agama -->
                            <h4>Agama</h4>
                            <div class="mb-3">
                                <select class="form-select" name="agama" required>
                                    <option value="islam">Islam</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>
                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script>
</body>

</html>
