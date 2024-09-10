<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body style="background-color: #FFFFFF; background-attachment: fixed; background-size: cover; background-position: center;" background="../assets/binus/shopbg.jpg">

    <!-- Header -->
    <?php include '../module/header.php' ?>

    <!-- Content -->
    <!-- Banner Atas -->
    <div class="slideshow">
        <img class="slides" src="../assets/binus/thinkpad.png">
        <img class="slides" src="../assets/binus/hp.jpg">
        <img class="slides" src="../assets/binus/lenovo.png">
        <img class="slides" src="../assets/binus/acer.png">
        <img class="slides" src="../assets/binus/asus.png">
        <img class="slides" src="../assets/binus/infinix.png">
        <img class="slides" src="../assets/binus/dell.png">
    </div>
    <script src="../assets/js/script.js"></script>

    <div class="container-form">
        <div class="form-container" style="background: url('../assets/binus/shopbg.jpg') no-repeat center center;">
            <h1 class="form-title">Contact Us</h1>
            <form id="contact-form" class="contact-form">
                <label for="name" class="form-label">Nama Lengkap:</label>
                <input type="text" id="name" name="name" class="form-input" required>

                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-input" required>

                <label for="message" class="form-label">Jelaskan Laptop Seperti Apa Yang Anda Cari:</label>
                <textarea id="message" name="message" class="form-textarea" rows="4" required></textarea>

                <button type="submit" class="form-button">Send</button>
            </form>
        </div>

        <div class="info-text" style="background: url('../assets/binus/shopbg.jpg') no-repeat center center;">
            <h2>Informasi Lebih Lanjut</h2>
            <p>Jika Anda memerlukan bantuan lebih lanjut, silakan hubungi kami melalui nomor di bawah ini.</p>
            <p>
                <a href="https://wa.me/8568428849"><img src="../assets/binus/Whatsapp.png" style="width: 30px; height: 30px; margin-right: 10px;">
                    +62 856-8428-849
                </a>
            </p>

            <p>
                <a href="mailto:info@example.com"><img src="../assets/binus/Whatsapp.png" style="width: 30px; height: 30px; margin-right: 10px;">
                    +62 838-1234-5678
                </a>
            </p>
        </div>
    </div>
    <!-- Footer -->
    <?php include '../module/footer.php' ?>
</body>