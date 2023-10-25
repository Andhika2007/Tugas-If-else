<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usia minimal masuk Wahana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: gray;
            text-align: center;
            margin: 0;
            font-size: 20px;
            font-weight: 600;
        }

        .container{
            max-width: 700px;
            margin: 30px auto;
            background-color: #20d7d8;
            height: 980px;
        }

        font{
            width: 80%;
            background-color: #a2e8e9;
            display: block;
            margin: auto;
            font-size: 25px;
            font-weight: 700;
        }

        h1 {
            background-color: #a2e8e9;
            color: white;
            padding: 20px;
            margin: 0;
            margin-bottom: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 50px;
            background-color: #a2e8e9;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="radio"] {
            margin-right: 5px;
            margin-bottom: 20px;
            margin-top: 5px;
        }
        input[type="submit"] {
            background-color: #20d7d8;
            color: #0f2742;
            font-size: 20px;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        h3 {
            background-color: #0f2742;
            color: white;
            padding: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
            background-color: #a2e8e9;
            width: 60%;
            margin: 15px auto;
        }
        li {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Usia minimal masuk Wahana</h1>

    <form method="post">
        <label for="nama">Masukan Nama Anda</label>
        <input type="text" name="nama" required>
        
        <label for="jk">Masukan Jenis Kelamin Anda:</label>
        <input type="radio" name="jk" value="laki" checked>Laki-laki
        <input type="radio" name="jk" value="perempuan">Perempuan

        <label for="umur">Masukan Umur Anda:</label>
        <input type="number" name="umur" required>

        <label for="tinggi">Masukan Tinggi Anda</label>
        <input type="number" name="tinggi" required>

        <input type="submit" value="Cek Kelayakan">
    </form>

    <h3>Ketentuan</h3>
    <ul>
        <li>Untuk Laki-laki</li>
        <li>Umur 13 tahun ke atas</li>
        <li>Tinggi 130 CM ke atas</li>
    </ul>

    <ul>
        <li>Untuk Perempuan</li>
        <li>Umur 15 tahun ke atas</li>
        <li>Tinggi 140 CM ke atas</li>
    </ul>

    <font>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = isset($_POST["nama"]) ? $_POST["nama"] : null;
        $jk = isset($_POST["jk"]) ? $_POST["jk"] : null;
        $umur = isset($_POST["umur"]) ? $_POST["umur"] : null;
        $tinggi = isset($_POST["tinggi"]) ? $_POST["tinggi"] : null;
    
        if ($jk == "laki") {
            if ($umur >= 13) {
                if ($tinggi >= 130) {
                    echo "Selamat $nama, Anda memenuhi semua persyaratan. Silakan masuk ke wahana.";
                }else{
                    $ku = 130 - $tinggi;
                    echo "Maaf $nama tinggi anda masih kurang $ku, Silahkan datang lagi kalau tinggi anda sudah cukup";
                }
            }else{
                echo "Maaf $nama Umur kamu Masih kurang, silahkan datang lagi kalau kamu sudah berumur 13 tahun. jangan lupa minum susu ya";
            }
        } elseif ($jk == "perempuan") {
            if ($umur >= 15) {
                if ($tinggi >= 140) {
                    echo "Selamat $nama, Anda memenuhi semua persyaratan. Silakan masuk ke wahana.";
                }else{
                    $me = 140 - $tinggi;
                    echo "Maaf $nama tinggi kamu masih kurang $me, silahkan datang lagi kalau tinggi anda sudah cuku[";
                }
            }else{
                echo "Maaf $nama Umur kamu Masih kurang, silahkan datang lagi kalau kamu sudah berumur 13 tahun. jangan lupa minum susu ya";
            }
        }
    }
    
    ?>
    </font>
    </div>
</body>
</html>
