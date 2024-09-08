<!-- Header Section -->
<?php include '../module/header.php' ?>

<!-- Hero Section -->
<link rel="stylesheet" href="../assets/css/hadi.css">

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

            <center>
                <input type="submit" value="Kirim Order">
            </center>
        </form>
    </div>

</body>

</html>