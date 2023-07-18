<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ta pweb 2023</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div id="body">
        <div id="main">
            <div id="header">
                <h1>Daftarkan diri anda pada Pelatihan Pemrograman Web!</h1>
            </div>
            <div id="nav">
                <a href="#"><img src="profil.png"> Profil</a>
            </div>
        </div>
        <ul class="sidebar">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Kursus Pemrograman</a></li>
            <li><a href="#">Pemrograman Web</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>

        <div class="content">
            <form action="" onsubmit="validasiform(event)" method="post">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" id="nama"><br>
                <label>Email:</label><br>
                <input type="email" name="email" id="email"><br>
                <label>Tanggal Lahir:</label><br>
                <input type="date" name="tanggal" id="tanggal"><br>
                <label>NIM:</label><br>
                <input type="text" name="nim" id="nim"><br>
                <label>Jurusan:</label><br>
                <input type="text" name="jurusan" id="jurusan"><br><br>
                <input type="submit" value="Daftar">
            </form>
        </div>
        <div class="footer">
            <p>&copy; 2023</p>
        </div>
    </div>

    <script>
        function validasiform(event) {
            event.preventDefault();

            var nama = document.getElementById('nama').value;
            var email = document.getElementById('email').value;
            var nim = document.getElementById('nim').value;
            var jurusan = document.getElementById('jurusan').value;
            var tanggal = document.getElementById('tanggal').value;

            if (nama === "" || email === "" || nim === "" || jurusan === "") {
                alert('Silakan isi semua kolom yang tersedia!');
            } else {
                alert('Berhasil!!\nNama: ' + nama + '\nEmail: ' + email + '\nNIM: ' + nim + '\nJurusan: ' + jurusan + '\nTanggal Lahir: ' + tanggal);
            }
        }
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $tgl = $_POST["tanggal"];
        $email = $_POST["email"];
        $nim = $_POST["nim"];
        $jurusan = $_POST["jurusan"];

        $data = array(
            "nama" => $nama,
            "tanggal" => $tgl,
            "email" => $email,
            "nim" => $nim,
            "jurusan" => $jurusan
        );

        $file = fopen("data.txt", "a");
        if ($file) {
            fwrite($file, implode(",", $data) . "\n");
            fclose($file);
            echo "Data berhasil disimpan.";
        } else {
            echo "Gagal membuka file data.txt";
        }
    }
    ?>


</body>
</html>
