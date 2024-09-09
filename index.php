<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendataan</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
            border: 1px solid #e0e0e0;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-size: 24px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
            font-size: 14px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 8px rgba(74, 144, 226, 0.2);
            outline: none;
        }

        fieldset {
            border: none;
            padding: 0;
            margin-bottom: 14px;
            background-color: #f9f9f9;
            border-radius: 6px;
            padding: 12px;
        }

        legend {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 8px;
        }

        button {
            background-color: #4a90e2;
            color: #ffffff;
            border: none;
            padding: 14px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #357abd;
            transform: scale(1.02);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>

    <div class="container">
        <br>
        <br>
        <br>

        <h1>Formulir Pendaftaran Mahasiswa</h1>
        <form action="proses.php" method="post">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>

            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas:</label>
            <select id="kelas" name="kelas" required>
                <option value="" disabled selected>Pilih Kelas</option>
                <option value="T3A">T3A</option>
                <option value="T3B">T3B</option>
                <option value="T3C">T3C</option>
                <option value="T3D">T3D</option>
            </select>

            <fieldset>
                <legend>Jenis Kelamin:</legend>
                <div>
                    <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                </div>
                <div>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </fieldset>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="pesan" rows="5" placeholder="Masukkan pesan..."></textarea>

            <button type="submit" name="submit">Kirim</button>
        </form>
    </div>
</body>
</html>
