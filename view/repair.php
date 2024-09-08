<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BINUS SERVICE - Layanan Perbaikan dan Jual Beli Laptop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        h1 {
            list-style-type: none;
            padding: 12;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
        }
        section {
            padding: 20px;
            margin: 20px 0;
            background-color: transparent;
        }
        .container {
            width: 70%;
            margin: auto;
        }
        h2, h3, h4 {
            color: #333;
        }
        a.btn {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a.btn:hover {
            background-color: #0056b3;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        form label, form input, form textarea {
            display: block;
            margin: 10px 0;
            width: 100%;
        }
        form input, form textarea {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
        button:hover {
            background-color: #0000FF;
        }
        .alert {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            margin-bottom: 20px;
            text-align: center;
            border-radius: 5px;
        }

        /* Flexbox untuk konten di atas footer */
        .above-footer {
            display: flex;
            justify-content: space-around;
            padding: 20px 0;
            background-color: transparent;
        }
        .above-footer div {
            text-align: center;
        }
        .above-footer div h4 {
            color: #333;
            font-size: 1.2rem;
        }

        /* Style footer */
        footer p {
            margin: 0;
        }
    </style>
</head>

    <!-- Header Section -->
    <?php include '../module/header.php' ?>

    <!-- Hero Section -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('../assets/binus/bg.png');
            margin: 0;
            padding: 10px;
        }

        .container {
            width: 35%;
            margin: auto;
            margin-top: 50px;
            background: #fff;
            padding: 10px;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            position: absolute;
            right: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="nik"],
        input[type="brg"],
        textarea,
        select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 7px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background: #0056b3;
        }

        .alert {
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
            text-align: center;
        }

        .alert.success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert.error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
    
    
    <body>
<div class="container">
    <h2>Form Order Service</h2>

    <?php if (!empty($success_message)) { ?>
        <div class="alert success">
            <?php echo $success_message; ?>
        </div>
    <?php } ?>

    <?php if (!empty($error_message)) { ?>
        <div class="alert error">
            <?php echo $error_message; ?>
        </div>
    <?php } ?>

    <form method="POST" action="ServiceOrder.php" style="margin: top 150px;">
        <div class="form-group">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="nik">Nik:</label>
            <input type="nik" id="nik" name="nik" required>
        </div>

        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="service_type">Jenis Kebutuhan:</label>
            <select id="service_type" name="service_type" required>
                <option value="">Pilih Layanan</option>
                <option value="Layanan A">Layanan A</option>
                <option value="Layanan B">Layanan B</option>
                <option value="Layanan C">Layanan C</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phone">No Telepon (Opsional):</label>
            <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
            <label for="nik">Nama Barang:</label>
            <input type="brg" id="barang" name="barang" required>
        </div>

        <div class="form-group">
            <label for="service_type">Jenis Barang:</label>
            <select id="service_type" name="service_type" required>
                <option value="">Pilih Layanan</option>
                <option value="Layanan A">Layanan A</option>
                <option value="Layanan B">Layanan B</option>
                <option value="Layanan C">Layanan C</option>
            </select>
        </div>

        <input type="submit" value="Kirim Order">
    </form>
</div>

</body>

</html>
