<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body style="background-color: #FFFFFF;">

    <!-- Header -->
    <?php include '../module/header.php' ?>
    <br>
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

    <div class="form-container">
        <h1 class="form-title">Contact Us</h1>
        <form id="contact-form" class="contact-form">
            <label for="name" class="form-label">Name:</label>
            <input type="text" id="name" name="name" class="form-input" required>

            <label for="email" class="form-label">Email:</label>
            <input type="email" id="email" name="email" class="form-input" required>

            <label for="message" class="form-label">Message:</label>
            <textarea id="message" name="message" class="form-textarea" rows="4" required></textarea>

            <button type="submit" class="form-button">Send</button>
        </form>
    </div>

    <div class="contact-text">
        <div class="text-contact">text</div>
    </div>
    <!-- Footer -->
    <?php include '../module/footer.php' ?>
</body>