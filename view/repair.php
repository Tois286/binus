<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS SERVICE - Layanan Perbaikan dan Jual Beli Laptop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #2c3e50;
        }

        p {
            font-size: 18px;
            color: #34495e;
        }
    </style>
</head>

<body>

    <h1>Selamat Datang di Web Service Sederhana!</h1>
    <p>Ini adalah contoh web sederhana menggunakan HTML.</p>

    <!-- Dynamic message for a name -->
    <h2 id="greeting"></h2>

    <script>
        // Mengambil nama dari URL (contoh: ?name=John)
        const params = new URLSearchParams(window.location.search);
        const name = params.get('name');

        // Menampilkan pesan dinamis jika ada nama
        if (name) {
            document.getElementById('greeting').textContent = `Hello, ${name}! Selamat datang di layanan kami.`;
        }
    </script>

</body>

</html>